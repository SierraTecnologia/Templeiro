<?php

namespace Templeiro;

use Config;
use Crypto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ReflectionClass;
use Request;
use Session;

use View;

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
    protected $layout = false;

    protected $theme = 'default';

    public function __construct($theme)
    {
        $this->theme = $theme;

        // $locationTheme = base_path('resources/themes/'); // @todo Verificar se existe no app antes do templeiro
        // $locationTheme = __DIR__.'/../'.'themes/';

        // View::addLocation($locationTheme.$theme.'/views');
        // View::addNamespace('siravel-frontend', $locationTheme.$theme.'/views');
        // View::addNamespace('default-frontend', $locationTheme.'default/views');
    }

    public function loadBoot()
    {
        $locationTheme = base_path('resources/themes/'); // @todo Verificar se existe no app antes do templeiro
        $locationTheme = __DIR__.'/../'.'themes/';

        View::addLocation($locationTheme.$this->theme.'/views');
        View::addNamespace('siravel-frontend', $locationTheme.$this->theme.'/views');
        View::addNamespace('cms-frontend', $locationTheme.$this->theme.'/views');
        View::addNamespace('default-frontend', $locationTheme.'default/views');

        /*
        |--------------------------------------------------------------------------
        | Blade Directives
        |--------------------------------------------------------------------------
        */

        Blade::directive('theme', function ($expression) {
            if (Str::startsWith($expression, '(')) {
                $expression = substr($expression, 1, -1);
            }

            $view = '"siravel-frontend::'.str_replace('"', '', str_replace("'", '', $expression)).'"';

            return "<?php echo \$__env->make($view, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>";
        });

        Blade::directive('themejs', function ($expression) {
            return "<?php echo Minify::javascript('".__DIR__."/../themes/".$this->theme."/assets/js/'.$expression); ?>";
            /* return "<?php echo Minify::javascript('../themes/".$this->theme."/assets/js/'.$expression); ?>"; */
        });

        Blade::directive('themecss', function ($expression) {
            return "<?php echo Minify::stylesheet('".__DIR__."/../themes/".$this->theme."/assets/css/'.$expression); ?>";
            /* return "<?php echo Minify::stylesheet('../themes/".$this->theme."/assets/css/'.$expression); ?>"; */
        });
        Blade::directive('menu', function ($expression) {
            return "<?php echo Cms::menu($expression); ?>";
        });

        Blade::directive('block', function ($expression) {
            $module = Cms::getModule();
            return "<?php echo optional(\$".$module.")->block($expression); ?>";
        });

        Blade::directive('languages', function ($expression) {
            return "<?php echo Cms::languageLinks($expression); ?>";
        });

        Blade::directive('modules', function ($expression) {
            return "<?php echo Cms::moduleLinks($expression); ?>";
        });

        Blade::directive('widget', function ($expression) {
            return "<?php echo Cms::widget($expression); ?>";
        });

        Blade::directive('promotion', function ($expression) {
            return "<?php echo Cms::promotion($expression); ?>";
        });

        Blade::directive('image', function ($expression) {
            return "<?php echo Cms::image($expression); ?>";
        });

        Blade::directive('image_link', function ($expression) {
            return "<?php echo Cms::imageLink($expression); ?>";
        });

        Blade::directive('images', function ($expression) {
            return "<?php echo Cms::images($expression); ?>";
        });

        Blade::directive('edit', function ($expression) {
            return "<?php echo Cms::editBtn($expression); ?>";
        });

        Blade::directive('editBtn', function ($expression) {
            return "<?php echo Cms::editBtnSecondary($expression); ?>";
        });

        Blade::directive('markdown', function ($expression) {
            return "<?php echo Markdown::convertToHtml($expression); ?>";
        });
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
    public function asset($path, $contentType = 'null', $fullURL = false)
    {
        if (!$fullURL) {
            return $filePath = __DIR__.'/../'.'themes/'.$this->theme.'/assets/'.$path;
        }

        return url('/templeiro/asset/'.Crypto::urlEncode($path).'/'.Crypto::urlEncode($contentType));
        // return url($this->backendRoute.'/asset/'.Crypto::url_encode($path).'/'.Crypto::url_encode($contentType));
    }


    public function setTheme()
    {
    }
    public function title()
    {
        return 'title';
    }
    public function description()
    {
        return 'description';
    }

    public function loadView()
    {
        if ($this->layout) {
            return ;
        }
        // Set the layout from the Config file
        $this->layout = View::make('siravel-frontend::layouts.master');
    }


    /**
     * Pass controller properties that are used by the layout and views through
     * to the view layer
     *
     * @param  mixed $content string view name or an HtmlObject / View object
     * @param  array $vars    Key value pairs passed to the content view
     * @return Illuminate\View\View
     */
    public function populateView($content, $vars = [])
    {
        $this->loadView();

        // The view
        $this->layout->content = $this->getContentView($content);

        // Set vars
        $this->layout->title = $this->title();
        $this->layout->description = $this->description();
        // View::share('controller', $this->controller);

        // Make sure that the content is a Laravel view before applying vars.
        // to it.  In the case of the index view, `content` is a Fields\Listing
        // instance, not a Laravel view
        if (is_a($this->layout->content, 'Illuminate\View\View')) {
            $this->layout->content->with($vars);
        }

        // Return the layout View
        return $this->layout;
    }
    public function view($content, $vars = [])
    {
        return $this->populateView($content, $vars);
    }

    private function getContentView($content)
    {
        if (!is_string($content)) {
            return $content;
        }

        if (View::exists('siravel-frontend::'.$content)) {
            return View::make('siravel-frontend::'.$content);
        }

        if (View::exists('default-frontend::'.$content)) {
            return View::make('default-frontend::'.$content);
        }
        
        return View::make($content);
    }
}
