<?php

namespace App\Facades;

use App\Services\CampaignService;

class CampaignFacade extends Facade
{

    public static  function initInstance()
    {
        self::$service =  app()->make(CampaignService::class);
    }
}
