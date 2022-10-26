<?php

namespace App\Facades;

use App\Services\UserService;

class UserFacade extends Facade
{

    public static  function initInstance()
    {
        self::$service =  app()->make(UserService::class);
    }
}
