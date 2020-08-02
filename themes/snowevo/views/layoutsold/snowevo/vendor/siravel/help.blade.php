@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <h1 class="page-header text-center">{!! trans('features.help') !!}</h1>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Resource History aka. Rollback and Revert</b></div>
            <div class="panel-body">
                With many of the Siravel features.you can perform a Rollback or Revert to an earlier moment in history. In pages for example if you click Rollback, you will go back to the most recently saved version of the post. However, you can only go back once, or rather undo, it does not keep digging through history. If you would like to go further back, visit the pages History and you will find different edits, you can revert to any of these with just a single click.
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Published Assets</b></div>
            <div class="panel-body">
                Siravel publishes views and controllers within your application. This allows you to control everything you want. You will find the controllers in: <code>app/Http/Controllers/Siravel</code> and the views in: <code>resources/themes</code>. There is also the siravel config which is added to your app's config directory.
                <br><br>
                Siravel will also be able to generate custom features.which you can find in the following directory: <code>admin/features./code>
                <br><br>
                To generate these files simple run:
                <br><br>
                <pre>php artisan vendor:publish</pre>
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Multilingual</b></div>
            <div class="panel-body">
                Siravel is fully multilingual all you need to do is set the languages in your <code>config/siravel.php</code> file and then in your app just set the <code>locale</code> and poof! you have multi-language support.
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>API Endpoints</b></div>
            <div class="panel-body">
            Siravel comes with a very basic API. It provides access to all published public facing data. You can define details in your Siravel API middleware.
            <br><br>
            Out of the box Siravel API requires use of the <code>api-token</code> set in the config of your app.
            <br><br>
            All requests should have the following added to the url: <code>?token={config.siravel.apiToken}</code>
            <br><br>
            <pre>/admin/api/blog
/admin/api/blog/{id}
/admin/api/events
/admin/api/events/{id}
/admin/api/faqs
/admin/api/faqs/{id}
/admin/api/files
/admin/api/files/{id}
/admin/api/images
/admin/api/images/{id}
/admin/api/pages
/admin/api/pages/{id}
/admin/api/widgets
/admin/api/widgets/{id}</pre>
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Console Commands</b></div>
            <div class="panel-body">
                Siravel comes with a few console commands to handle things like module building and publishing
                <br><br>
                You can also build simple features.which will run inside Siravel. Simply provide a table name you wish to manage and allow Siravel to build a CRUD structure that works inside Siravel's module directory.
                <br><br>
                You need to add the following line in the autoload PSR-4 group to your composer file to ensure that all features.will work correctly:
                <br><br>
                <pre>"Siravel\\Features\\": "admin/features.",</pre>
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Features: Generate</b></div>
            <div class="panel-body">
                The commmand for generating custom features.for Siravel is:
                <br><br>
                <pre>php artisan module:crud {name} {--schema="id:increments,name:string"}</pre>
                <pre>php artisan module:make {name}</pre>
                <br>
                The migration option will generate a migration file that can be found in the module. You will then need to run the module migrate to get the module to run its migration course.
                <br><br>
                <pre>"Siravel\\Features\\": "admin/features.",</pre>
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Features: Composer and Publish</b></div>
            <div class="panel-body">
                Siravel lets you create a composer package from a module. So if you want to can offer them to others rather easily.
                <br><br>
                <pre>php artisan module:composer {module} {namespace}</pre>
                <br>
                You can also publish assets that belong to a module. So in the chance you wish to build your own features.for future projects you can easily publish specific assets to any applications you build.
                <br><br>
                <pre>php artisan module:publish {module}</pre>
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Front-End Code: Helpers</b></div>
            <div class="panel-body">
                Siravel automatically builds you a sample of the controllers, and views for your application's pages, blog, faqs, etc. You can run the following services as method calls or use the blade directives listed below:
                <br><br>
                <pre>Siravel::widget('slug') // Renders the widget</pre>
                <pre>Siravel::menu('slug', 'custom-view-path') // Renders the menu</pre>
                <pre>Siravel::images('tag') // Outputs an array of images with matching tags if no tag defined all images are returned</pre>
                <br>
                You can also publish assets that belong to a module. So in the chance you wish to build your own features.for future projects you can easily publish specific assets to any applications you build.
                <br><br>
                <pre>php artisan module:publish {module}</pre>
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Front-End Code: Custom Templates</b></div>
            <div class="panel-body">
                By default the homepage has its own template but you can add any by following these details: To create custom templates for different purposes simply make a view in the <code>resources/themes/{theme}/{module}</code> directory that looks similar to: <code>xxxx-template.blade.php</code>. This means you still have full control of blade templating but your pages can easily swap out views.
            </div>
        </div>

        <div class="panel panel-default panel-help">
            <div class="panel-heading"><b>Front-End Code: Blade Components</b></div>
            <div class="panel-body">
                By default the Siravel has the default theme. You can override this in the <code>config/siravel.php</code> file. The theme has the namespace of: <code></code>, and has some <b>Blade</b> directives such as:
                <br><br>
                <pre>&#64;theme('path') // includes file within the theme path</pre>
                <pre>&#64;menu('slug') // menu rendering</pre>
                <pre>&#64;features.) // module url links</pre>
                <pre>&#64;widget('slug') // widget contents</pre>
                <pre>&#64;image('id', 'class') // an image HTML tag</pre>
                <pre>&#64;image_link('id') // an image url</pre>
                <pre>&#64;images('tag') // images</pre>
                <pre>&#64;edit('module', 'id') // a link to edit a module or item on the front-end of the site</pre>
                <br>
                You can generate new themes and publish thier public assets. Consult the <a target="_blank" href="http://siravel.info/themes">documentation</a> for more information about themes etc.
            </div>
        </div>
    </div>

@stop
