<?php

namespace DavidNgugi\Mcash;

use Illuminate\Support\Facades\Facade;

class McashFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mcash';
    }
}