<?php

namespace App\Facades;

use App\Services\CustomerService;

class CustomerFacade extends Facade
{

    public static  function initInstance()
    {
        self::$service =  app()->make(CustomerService::class);
    }
}
