<?php

namespace App\Facades;

use App\Services\ActivityService;

class ActivityFacade extends Facade
{

    public static  function initInstance()
    {
        self::$service =  app()->make(ActivityService::class);
    }
}
