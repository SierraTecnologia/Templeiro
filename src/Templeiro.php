<?php

namespace Templeiro;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use View;
use Config;
use Request;
use Session;
use ReflectionClass;

use Crypto;

class Templeiro
{

    /**
     * The controller class name. Ex: Admin\PostsController
     *
     * @var string
     */
    protected $controller;

    /**
     * The HTML title, shown in header of the vie. Ex: News Posts
     *
     * @var string
     */
    protected $title;

    /**
     * The text description of what this controller manages, shown in the header.
     * Ex: "Relevant news about the brand"
     *
     * @var string
     */
    protected $description;

    //---------------------------------------------------------------------------
    // Constructing
    //---------------------------------------------------------------------------

    /**
     * A view instance to use as the layout
     *
     * @var Illuminate\Contracts\View\Factory
     */
    protected $layout;

    protected $theme = 'default';

    public function __construct()
    {

    }


    /**
     * Get a module's asset
     *
     * @param string $module      Module name
     * @param string $path        Path to module asset
     * @param string $contentType Asset type
     *
     * @return string
     */
    public function asset($path, $contentType = 'null', $fullURL = true)
    {
        if (!$fullURL) {
            return $filePath = __DIR__.'/../../'.'themes/'.Config::get('siravel.frontend-theme', 'sierratecnologia').'/assets/'.$path;
        }

        return url('/templeiro/asset/'.Crypto::urlEncode($path).'/'.Crypto::urlEncode($contentType));
        // return url($this->backendRoute.'/asset/'.Crypto::url_encode($path).'/'.Crypto::url_encode($contentType));
    }


    public function setTheme()
    {

    }

    public function loadView()
    {
        // Set the layout from the Config file
        $this->layout = View::make(\Illuminate\Support\Facades\Config::get('painel.core.layout'));
    }


    /**
     * Pass controller properties that are used by the layout and views through
     * to the view layer
     *
     * @param  mixed $content string view name or an HtmlObject / View object
     * @param  array $vars    Key value pairs passed to the content view
     * @return Illuminate\View\View
     */
    protected function populateView($content, $vars = [])
    {
        // The view
        if (is_string($content)) {
            $this->layout->content = View::make($content);
        } else {
            $this->layout->content = $content;
        }

        // Set vars
        $this->layout->title = $this->title();
        $this->layout->description = $this->description();
        View::share('controller', $this->controller);

        // Make sure that the content is a Laravel view before applying vars.
        // to it.  In the case of the index view, `content` is a Fields\Listing
        // instance, not a Laravel view
        if (is_a($this->layout->content, 'Illuminate\View\View')) {
            $this->layout->content->with($vars);
        }

        // Return the layout View
        return $this->layout;
    }
    
}
