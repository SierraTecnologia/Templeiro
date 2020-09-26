<?php

namespace Templeiro\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use ReflectionException;
use Templeiro\Facades\CryptoServiceFacade;
use Templeiro\Repositories\ImageRepository;
use Templeiro\Services\Traits\DefaultModuleServiceTrait;
use Templeiro\Services\Traits\MenuServiceTrait;
use Templeiro\Services\Traits\ModuleServiceTrait;

class CmsService
{
    use MenuServiceTrait,
        DefaultModuleServiceTrait,
        ModuleServiceTrait;

    public $backendRoute;

    /**
     * Get a module's asset.
     *
     * @param string $module      Module name
     * @param string $path        Path to module asset
     * @param string $contentType Asset type
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function asset($path, $contentType = 'null', $fullURL = true)
    {
        if (!$fullURL) {
            return base_path(__DIR__.'/../Assets/'.$path);
        }

        return url($this->backendRoute.'/asset/'.CryptoServiceFacade::url_encode($path).'/'.CryptoServiceFacade::url_encode($contentType));
    }

    /**
     * Get a file download response
     *
     * @param string $fileName
     * @param string $realFileName
     *
     * @return Response
     */
    public function fileAsDownload($fileName, $realFileName)
    {
        return app(FileService::class)->fileAsDownload($fileName, $realFileName);
    }

    /**
     * Get Module Config.
     *
     * @param string $key Config key
     *
     * @return mixed
     */
    public function config($key)
    {
        $splitKey = explode('.', $key);

        $moduleConfig = include __DIR__.'/../PublishedAssets/Config/'.$splitKey[0].'.php';

        $strippedKey = preg_replace('/'.$splitKey[1].'./', '', preg_replace('/'.$splitKey[0].'./', '', $key, 1), 1);

        return $moduleConfig[$strippedKey];
    }

    /**
     * Assign a value to the path.
     *
     * @param array  &$arr Original Array of values
     * @param string $path Array as path string
     *
     * @return mixed
     */
    public function assignArrayByPath(&$arr, $path)
    {
        $keys = explode('.', $path);

        while ($key = array_shift($keys)) {
            $arr = &$arr[$key];
        }

        return $arr;
    }

    /**
     * Edit button.
     *
     * @param string $type
     * @param int    $id
     * @param string $class
     *
     * @return string
     */
    public function editBtn($type = null, $id = null, $class="btn-outline-secondary")
    {
        if (Gate::allows('cms', Auth::user())) {
            if (!is_null($id)) {
                return '<a href="'.url($this->backendRoute.'/'.$type.'/'.$id.'/edit').'" class="btn btn-sm '.$class.'"><span class="fa fa-edit"></span> Edit</a>';
            } else {
                return '<a href="'.url($this->backendRoute.'/'.$type).'" class="btn btn-sm '.$class.'"><span class="fa fa-edit"></span> Edit</a>';
            }
        }

        return '';
    }
}
