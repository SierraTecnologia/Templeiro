<?php

namespace Templeiro\Services;

use App;
use Crypto;
use Exception;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Log;
use Siravel;
use SplFileInfo;

class AssetService
{
    protected $mimeTypes;

    public function __construct()
    {
        $this->mimeTypes = include base_path('config'.DIRECTORY_SEPARATOR.'mime.php');
    }

    /**
     * Provide the File as a Public Asset.
     *
     * @param string $encFileName
     *
     * @return Download
     */
    public function asPublic($encFileName)
    {
        try {
            return Cache::remember(
                $encFileName.'_asPublic', 3600, function () use ($encFileName) {
                    $fileName = Crypto::urlDecode($encFileName);
                    $filePath = $this->getFilePath($fileName);

                    $fileTool = new SplFileInfo($filePath);
                    $ext = $fileTool->getExtension();
                    $contentType = $this->getMimeType($ext);

                    $headers = ['Content-Type' => $contentType];
                    $fileContent = $this->getFileContent($fileName, $contentType, $ext);

                    return Response::make(
                        $fileContent, 200, [
                        'Content-Type' => $contentType,
                        'Content-Disposition' => 'attachment; filename="'.$fileName.'"',
                        ]
                    );
                }
            );
        } catch (Exception $e) {
            return Response::make('file not found');
        }
    }

    /**
     * Provide the File as a Public Preview.
     *
     * @param string $encFileName
     *
     * @return Download
     */
    public function asPreview($encFileName, Filesystem $fileSystem)
    {
        try {
            return Cache::remember(
                $encFileName.'_preview', 3600, function () use ($encFileName, $fileSystem) {
                    $fileName = Crypto::urlDecode($encFileName);

                    if (\Illuminate\Support\Facades\Config::get('siravel.storage-location') === 'local' || \Illuminate\Support\Facades\Config::get('siravel.storage-location') === null) {
                        $filePath = storage_path('app/'.$fileName);
                        $contentType = $fileSystem->mimeType($filePath);
                        $ext = strtoupper($fileSystem->extension($filePath));
                    } else {
                        $filePath = Storage::disk(\Illuminate\Support\Facades\Config::get('siravel.storage-location', 'local'))->url($fileName);
                        $fileTool = new SplFileInfo($filePath);
                        $ext = $fileTool->getExtension();
                        $contentType = $this->getMimeType($ext);
                    }

                    if (stristr($contentType, 'image')) {
                        $headers = ['Content-Type' => $contentType];
                        $fileContent = $this->getFileContent($fileName, $contentType, $ext);
                    } else {
                        $fileContent = file_get_contents($this->generateImage($ext));
                    }

                    return Response::make(
                        $fileContent, 200, [
                        'Content-Type' => $contentType,
                        'Content-Disposition' => 'attachment; filename="'.$fileName.'"',
                        ]
                    );
                }
            );
        } catch (Exception $e) {
            return Response::make('file not found');
        }
    }

    /**
     * Provide file as download.
     *
     * @param string $encFileName
     * @param string $encRealFileName
     *
     * @return Downlaod
     */
    public function asDownload($encFileName, $encRealFileName)
    {
        try {
            return Cache::remember(
                $encFileName.'_asDownload', 3600, function () use ($encFileName, $encRealFileName) {
                    $fileName = Crypto::urlDecode($encFileName);
                    $realFileName = Crypto::urlDecode($encRealFileName);
                    $filePath = $this->getFilePath($fileName);

                    $fileTool = new SplFileInfo($filePath);
                    $ext = $fileTool->getExtension();
                    $contentType = $this->getMimeType($ext);

                    $headers = ['Content-Type' => $contentType];
                    $fileContent = $this->getFileContent($realFileName, $contentType, $ext);

                    return Response::make(
                        $fileContent, 200, [
                        'Content-Type' => $contentType,
                        'Content-Disposition' => 'attachment; filename="'.$fileName.'"',
                        ]
                    );
                }
            );
        } catch (Exception $e) {
            Siravel::notification('We encountered an error with that file', 'danger');

            return redirect('errors/general');
        }
    }

    /**
     * Gets an asset.
     *
     * @param string $encPath
     * @param string $contentType
     *
     * @return Provides the valid
     */
    public function asset($encPath, $contentType, Filesystem $fileSystem)
    {
        try {
            $path = Crypto::urlDecode($encPath);
            $filePath = __DIR__.'/../../'.'themes/'.Config::get('siravel.frontend-theme', 'sierratecnologia').'/assets/'.$path;
            // if (Request::get('isModule') === 'true') {
            //     $filePath = $path;
            // } else {
            //     $filePath = base_path('resources/themes/'.Config::get('siravel.frontend-theme').'/assets/'.$path);
            //     // if (str_contains($path, 'dist/') || str_contains($path, 'themes/')) {
            //     //     $filePath = __DIR__.'/../Assets/'.$path;
            //     // } else {
            //     //     $filePath = __DIR__.'/../Assets/src/'.$path;
            //     // }
            // }

            // /**
            //  * Se nao existir o arquivo no thema, verifica no resource normal
            //  */
            // if (!file_exists($filePath)) {
            //     $filePath = base_path('resources/assets/'.$path);
            // }

            // /**
            //  *
            //  */

            // if (!file_exists($filePath)) {
            //     $filePath = __DIR__.'/../../resources/requires/src/'.$path;
            // }

            $fileName = basename($filePath);

            if (!is_null($contentType)) {
                $contentType = Crypto::urlDecode($contentType);
            }

            if (is_null($contentType) || $contentType=='null') {
                $contentType = $fileSystem->mimeType($filePath);
            }
            $headers = ['Content-Type' => $contentType];

            return response()->download($filePath, $fileName, $headers);
        } catch (Exception $e) {
            Log::info('[Facilitador] Services -> Asset Error Exception: '.$e->getMessage());
            return Response::make('file not found');
        }
    }

    /**
     * Get the mime type.
     *
     * @param string $extension
     *
     * @return string
     */
    public function getMimeType($extension)
    {
        if (isset($this->mimeTypes['.'.strtolower($extension)])) {
            return $this->mimeTypes['.'.strtolower($extension)];
        }

        return 'text/plain';
    }

    /**
     * Get a file's path
     *
     * @param string $fileName
     *
     * @return string
     */
    public function getFilePath($fileName)
    {
        if (file_exists(storage_path('app/'.$fileName))) {
            $filePath = storage_path('app/'.$fileName);
        } else {
            $filePath = Storage::disk(\Illuminate\Support\Facades\Config::get('siravel.storage-location', 'local'))->url($fileName);
        }

        return $filePath;
    }

    /**
     * Get a files content
     *
     * @param string $fileName
     * @param string $contentType
     * @param string $ext
     *
     * @return mixed
     */
    public function getFileContent($fileName, $contentType, $ext)
    {
        if (Storage::disk(\Illuminate\Support\Facades\Config::get('siravel.storage-location', 'local'))->exists($fileName)) {
            $fileContent = Storage::disk(\Illuminate\Support\Facades\Config::get('siravel.storage-location', 'local'))->get($fileName);
        } elseif (!is_null(\Illuminate\Support\Facades\Config::get('filesystems.cloud.key'))) {
            $fileContent = Storage::disk('cloud')->get($fileName);
        } else {
            $fileContent = file_get_contents($this->generateImage('File Not Found'));
        }

        if (stristr($fileName, 'image') || stristr($contentType, 'image')) {
            if (! is_null(\Illuminate\Support\Facades\Config::get('siravel.preview-image-size'))) {
                $img = Image::make($fileContent);
                $img->resize(
                    \Illuminate\Support\Facades\Config::get('siravel.preview-image-size', 800), null, function ($constraint) {
                        $constraint->aspectRatio();
                    }
                );

                return $img->encode($ext);
            }
        }

        return $fileContent;
    }

    /**
     * Generate an image
     *
     * @param string $ext
     *
     * @return Image
     */
    public function generateImage($ext)
    {
        if ($ext == 'File Not Found') {
            return __DIR__.'/../Assets/src/images/blank-file-not-found.jpg';
        }

        return __DIR__.'/../Assets/src/images/blank-file.jpg';
    }
}
