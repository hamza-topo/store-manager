<?php

namespace App\Facades;

use App\Services\ProductService;

class ProductFacade extends Facade
{

    public static  function initInstance()
    {
        self::$service =  app()->make(ProductService::class);
    }
}
