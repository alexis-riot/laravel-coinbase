<?php

namespace AlexisRiot\Coinbase\Facades;

use Illuminate\Support\Facades\Facade;

class Coinbase extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'coinbase';
    }
}