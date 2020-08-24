<?php

namespace Templeiro\Http\Controllers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use League\Flysystem\Util;
use Templeiro\Services\AssetService;

class AssetController extends Controller
{
    public function __construct(AssetService $service)
    {
        parent::__construct();

        $this->service = $service;
    }

    public function assets(Request $request)
    {
        try {
            $path = __DIR__.'/../../../'.'themes/'.Config::get('siravel.frontend-theme', 'sierratecnologia').'/assets/'.Util::normalizeRelativePath(urldecode($request->path));
            // $path = dirname(__DIR__, 4).'/publishes/assets/'.Util::normalizeRelativePath(urldecode($request->path));
        } catch (\LogicException $e) {
            abort(404);
        }
        if (!File::exists($path) && Str::endsWith($path, '.js')) {
            $path = str_replace('publishes/assets', 'publishes/assets/js', $path);
        } elseif (!File::exists($path) && Str::endsWith($path, '.css')) {
            $path = str_replace('publishes/assets', 'publishes/assets/css', $path);
        }

        if (File::exists($path)) {
            $mime = '';
            if (Str::endsWith($path, '.js')) {
                $mime = 'text/javascript';
            } elseif (Str::endsWith($path, '.css')) {
                $mime = 'text/css';
            } else {
                $mime = File::mimeType($path);
            }
            $response = response(File::get($path), 200, ['Content-Type' => $mime]);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        }

        return response('', 404);
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
        return $this->service->asPublic($encFileName);
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
        return $this->service->asPreview($encFileName, $fileSystem);
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
        return $this->service->asDownload($encFileName, $encRealFileName);
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
        return $this->service->asset($encPath, $contentType, $fileSystem);
    }
}
