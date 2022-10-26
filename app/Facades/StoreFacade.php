<?php

namespace App\Facades;

use App\Services\StoreService;

class StoreFacade extends Facade
{

    public static  function initInstance()
    {
        self::$service =  app()->make(StoreService::class);
    }
}
