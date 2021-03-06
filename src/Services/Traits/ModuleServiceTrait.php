<?php

namespace Templeiro\Services\Traits;

use Illuminate\Support\Facades\Config;
use Templeiro\Facades\CryptoServiceFacade;

trait ModuleServiceTrait
{
    /**
     * Determine the module based on URL
     *
     * @return string
     */
    public function getModule()
    {
        $module = request()->segment(1);

        $defaultModules = config('siravel.active-core-modules');
        $extraModules = array_keys(config('siravel.modules', []));

        $modules = array_merge($defaultModules, $extraModules);

        if (in_array($module, $modules)) {
            return str_singular($module);
        }

        return 'page';
    }

    /**
     * Module Assets.
     *
     * @param string $module      Module name
     * @param string $path        Asset path
     * @param string $contentType Content type
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function moduleAsset($module, $path, $contentType = 'null')
    {
        $assetPath = base_path(Config::get('siravel.module-directory').'/'.ucfirst($module).'/Assets/'.$path);

        if (!is_file($assetPath)) {
            config('siravel.modules.'.$module.'.asset_path').'/'.$path;
        }

        return url(config('siravel.backend-route-prefix', 'cms').'/asset/'.CryptoServiceFacade::url_encode($assetPath).'/'.CryptoServiceFacade::url_encode($contentType).'/?isModule=true');
    }

    /**
     * Module Config.
     *
     * @param string $module      Module name
     * @param string $path        Asset path
     * @param string $contentType Content type
     *
     * @return string
     */
    public function moduleConfig($module, $path)
    {
        $configArray = @include base_path(Config::get('siravel.module-directory').'/'.ucfirst($module).'/config.php');

        if (!$configArray) {
            return config('siravel.modules.'.$module.'.'.$path);
        }

        return self::assignArrayByPath($configArray, $path);
    }

    /**
     * Module Links.
     *
     * @param array $ignoredModules A list of ignored links
     *
     * @return string
     */
    public function moduleLinks($ignoredModules = [], $linkClass = 'nav-link', $listClass = 'nav-item')
    {
        $links = '';

        $modules = config('siravel.modules', []);

        foreach ($ignoredModules as $ignoredModule) {
            if (in_array(strtolower($ignoredModule), array_keys($modules))) {
                unset($modules[strtolower($ignoredModule)]);
            }
        }

        foreach ($modules as $module => $config) {
            $link = $module;

            if (isset($config['url'])) {
                $link = $config['url'];
            }

            $displayLink = true;

            if (isset($config['is_ignored_in_menu']) && $config['is_ignored_in_menu']) {
                $displayLink = false;
            }

            if ($displayLink) {
                $links .= '<li class="'.$listClass.'"><a class="'.$linkClass.'" href="'.url($link).'">'.ucfirst($link).'</a></li>';
            }
        }

        return $links;
    }
}
