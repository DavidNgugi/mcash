<?php

namespace Mcash\Mpesa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Mcash
 *
 * @category PHP
 * @package  Mcash\Mpesa
 * @author   David Ngugi <david@davidngugi.com>
*/
class Mcash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mcash';
    }
}
