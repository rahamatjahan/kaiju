<?php

namespace Rahamatj\Kaiju\Facades;

use Illuminate\Support\Facades\Facade;

class Routes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Routes';
    }
}