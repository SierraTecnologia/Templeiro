<?php

namespace Templeiro\Facades;

use Illuminate\Support\Facades\Facade;

class CmsServiceFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cms';
    }
}
