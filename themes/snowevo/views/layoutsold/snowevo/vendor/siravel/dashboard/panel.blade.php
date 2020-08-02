<ul class="nav nav-sidebar">
    <li class="@if (Request::is('admin/dashboard')) active @endif">
        <a href="{!! url('admin/dashboard') !!}"><span class="fa fa-fw fa-dashboard"></span> {!! trans('features.dashboard') !!}</a>
    </li>

    <li class="@if (Request::is('admin/help')) active @endif">
        <a href="{!! url('admin/help') !!}"><span class="fa fa-fw fa-info-circle"></span> {!! trans('features.help') !!}</a>
    </li>

    @if (Route::get('user/settings'))
        <li class="@if (Request::is('user/settings') || Request::is('user/password')) active @endif">
            <a href="{!! url('user/settings') !!}"><span class="fa fa-fw fa-gear"></span> {!! trans('features.settings') !!}</a>
        </li>
    @endif

    @if (in_array('images', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/images') || Request::is('admin/images/*')) active @endif">
            <a href="{!! url('admin/images') !!}"><span class="fa fa-fw fa-image"></span> {!! trans('features.images') !!}</a>
        </li>
    @endif

    @if (in_array('files', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/files') || Request::is('admin/files/*')) active @endif">
            <a href="{!! url('admin/files') !!}"><span class="fa fa-fw fa-file"></span> {!! trans('features.files') !!}</a>
        </li>
    @endif

    @if (in_array('menus', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/menus') || Request::is('admin/menus/*') || Request::is('admin/links') || Request::is('admin/links/*')) active @endif">
            <a href="{!! url('admin/menus') !!}"><span class="fa fa-fw fa-link"></span> {!! trans('features.menus') !!}</a>
        </li>
    @endif

    @if (in_array('widgets', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/widgets') || Request::is('admin/widgets/*')) active @endif">
            <a href="{!! url('admin/widgets') !!}"><span class="fa fa-fw fa-gear"></span> {!! trans('features.widgets') !!}</a>
        </li>
    @endif

    @if (in_array('blog', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/blog') || Request::is('admin/blog/*')) active @endif">
            <a href="{!! url('admin/blog') !!}"><span class="fa fa-fw fa-pencil"></span> {!! trans('features.blog') !!}</a>
        </li>
    @endif

    @if (in_array('pages', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/pages') || Request::is('admin/pages/*')) active @endif">
            <a href="{!! url('admin/pages') !!}"><span class="fa fa-fw fa-file-text-o"></span> {!! trans('features.pages') !!}</a>
        </li>
    @endif

    @if (in_array('faqs', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/faqs') || Request::is('admin/faqs/*')) active @endif">
            <a href="{!! url('admin/faqs') !!}"><span class="fa fa-fw fa-question"></span> {!! trans('features.faqs') !!}</a>
        </li>
    @endif

    @if (in_array('events', Config::get('siravel.active-core-features., Siravel::defaultFeatures())))
        <li class="@if (Request::is('admin/events') || Request::is('admin/events/*')) active @endif">
            <a href="{!! url('admin/events') !!}"><span class="fa fa-fw fa-calendar"></span> {!! trans('features.events') !!}</a>
        </li>
    @endif

    {!! ModuleService::menus() !!}

    {!! Siravel::packageMenus() !!}

    @if (Route::get('admin/users')) <li class="sidebar-header"><span>{!! trans('features.admin') !!}</span></li> @endif

    @if (Route::get('admin/users'))
        <li class="@if (Request::is('admin/users') || Request::is('admin/users/*')) active @endif">
            <a href="{!! url('admin/users') !!}"><span class="fa fa-fw fa-users"></span> {!! trans('features.users') !!}</a>
        </li>
    @endif
    @if (Route::get('admin/roles'))
        <li class="@if (Request::is('admin/roles') || Request::is('admin/roles/*')) active @endif">
            <a href="{!! url('admin/roles') !!}"><span class="fa fa-fw fa-lock"></span> {!! trans('features.roles') !!}</a>
        </li>
    @endif
</ul>
