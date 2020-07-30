<?php

namespace Templeiro\Facades;

use Illuminate\Support\Facades\Facade;

class Templeiro extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'templeiro';
    }
}
