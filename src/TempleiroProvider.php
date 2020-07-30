<?php

namespace Templeiro;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Templeiro\Services\TempleiroService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;

use Log;
use App;
use Config;
use Route;
use Illuminate\Routing\Router;

use Muleta\Traits\Providers\ConsoleTools;

use Templeiro\Facades\Templeiro as TempleiroFacade;
use Illuminate\Contracts\Events\Dispatcher;


class TempleiroProvider extends ServiceProvider
{
    use ConsoleTools;

    public static $aliasProviders = [
        'Templeiro' => \Templeiro\Facades\Templeiro::class,
    ];

    public static $providers = [

        \Support\SupportProviderService::class,

        
    ];

    /**
     * Rotas do Menu
     */
    public static $menuItens = [
        'Tecnologia|110' => [
            [
                'text' => 'Desenvolvimento',
                'icon' => 'fas fa-fw fa-search',
                'icon_color' => "blue",
                'label_color' => "success",
                'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
            ],
            'Desenvolvimento' => [
                // [
                //     'text'        => 'Procurar',
                //     'icon'        => 'fas fa-fw fa-search',
                //     'icon_color'  => 'blue',
                //     'label_color' => 'success',
                //     'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                //     // 'access' => \App\Models\Role::$ADMIN
                // ],
                // [
                //     'text'        => 'Administração',
                //     'icon'        => 'fas fa-fw fa-search',
                //     'icon_color'  => 'blue',
                //     'label_color' => 'success',
                //     'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                //     // 'access' => \App\Models\Role::$ADMIN
                // ],
                // 'Procurar' => [
                    [
                        'text'        => 'Projetos',
                        'route'       => 'rica.templeiro.projects.index',
                        'icon'        => 'fas fa-fw fa-ship',
                        'icon_color'  => 'blue',
                        'label_color' => 'success',
                        'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                        // 'access' => \App\Models\Role::$ADMIN
                    ],
                // ],
            ],
        ],
        'Personalização|250' => [
            [
                'text'        => 'Tarefas',
                'icon'        => 'fas fa-fw fa-search',
                'icon_color'  => 'blue',
                'label_color' => 'success',
                'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                // 'access' => \App\Models\Role::$ADMIN
            ],
            [
                'text'        => 'Processos',
                'icon'        => 'fas fa-fw fa-search',
                'icon_color'  => 'blue',
                'label_color' => 'success',
                'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                // 'access' => \App\Models\Role::$ADMIN
            ],
            'Processos' => [
                [
                    'text'        => 'Arquitetura',
                    'route'       => 'rica.templeiro.manager.arquitetura.index',
                    'icon'        => 'fas fa-fw fa-car',
                    'icon_color'  => 'blue',
                    'label_color' => 'success',
                    'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                    // 'access' => \App\Models\Role::$ADMIN
                ],
            ],
            'Tarefas' => [
                [
                    'text'        => 'Fields',
                    'route'       => 'rica.templeiro.manager.fields.index',
                    'icon'        => 'fas fa-fw fa-car',
                    'icon_color'  => 'blue',
                    'label_color' => 'success',
                    'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                    // 'access' => \App\Models\Role::$ADMIN
                ],
            ],
        ],
    ];

    /**
     * Alias the services in the boot.
     */
    public function boot()
    {
        
        // Register configs, migrations, etc
        $this->registerDirectories();

        // COloquei no register pq nao tava reconhecendo as rotas para o adminlte
        $this->app->booted(function () {
            $this->routes();
        });

        $this->loadLogger();
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        /**
         * Templeiro; Routes
         */
        Route::group(
            [
                'namespace' => '\Templeiro\Http\Controllers',
                'prefix' => \Illuminate\Support\Facades\Config::get('application.routes.main', ''),
                'as' => 'rica.',
                // 'middleware' => 'rica',
            ], function ($router) {
                include __DIR__.'/../routes/web.php';
            }
        );
    }

    /**
     * Register the services.
     */
    public function register()
    {
        $this->mergeConfigFrom($this->getPublishesPath('config/sitec/templeiro.php'), 'sitec.templeiro');
        

        $this->setProviders();
        // $this->routes();



        // Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->app->singleton(
            'templeiro', function () {
                return new Templeiro();
            }
        );
        
        /*
        |--------------------------------------------------------------------------
        | Register the Utilities
        |--------------------------------------------------------------------------
        */
        /**
         * Singleton Templeiro;
         */
        $this->app->singleton(
            TempleiroService::class, function ($app) {
                Log::channel('sitec-templeiro')->info('Singleton Templeiro;');
                return new TempleiroService(\Illuminate\Support\Facades\Config::get('sitec.templeiro'));
            }
        );

        // Register commands
        $this->registerCommandFolders(
            [
            base_path('vendor/sierratecnologia/templeiro/src/Console/Commands') => '\Templeiro\Console\Commands',
            ]
        );

        // /**
        //  * Helpers
        //  */
        // Aqui noa funciona
        // if (!function_exists('templeiro_asset')) {
        //     function templeiro_asset($path, $secure = null)
        //     {
        //         return route('rica.templeiro.assets').'?path='.urlencode($path);
        //     }
        // }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'templeiro',
        ];
    }

    /**
     * Register configs, migrations, etc
     *
     * @return void
     */
    public function registerDirectories()
    {
        // Publish config files
        $this->publishes(
            [
            // Paths
            $this->getPublishesPath('config/sitec') => config_path('sitec'),
            ], ['config',  'sitec', 'sitec-config']
        );

        // // Publish templeiro css and js to public directory
        // $this->publishes([
        //     $this->getDistPath('templeiro') => public_path('assets/templeiro')
        // ], ['public',  'sitec', 'sitec-public']);

        $this->loadViews();
        $this->loadTranslations();

    }

    private function loadViews()
    {
        // View namespace
        $viewsPath = $this->getResourcesPath('views');
        $this->loadViewsFrom($viewsPath, 'templeiro');
        $this->publishes(
            [
            $viewsPath => base_path('resources/views/vendor/templeiro'),
            ], ['views',  'sitec', 'sitec-views']
        );

    }
    
    private function loadTranslations()
    {
        // Publish lanaguage files
        $this->publishes(
            [
            $this->getResourcesPath('lang') => resource_path('lang/vendor/templeiro')
            ], ['lang',  'sitec', 'sitec-lang', 'translations']
        );

        // Load translations
        $this->loadTranslationsFrom($this->getResourcesPath('lang'), 'templeiro');
    }


    /**
     * 
     */
    private function loadLogger()
    {
        Config::set(
            'logging.channels.sitec-templeiro', [
            'driver' => 'single',
            'path' => storage_path('logs/sitec-templeiro.log'),
            'level' => env('APP_LOG_LEVEL', 'debug'),
            ]
        );
    }

}
