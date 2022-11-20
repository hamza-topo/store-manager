<?php

namespace App\Services\Api;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class Client
{


    //TODO:change this url 
    protected $client;
    // protected string $url = 'https://ads.tiktok.com/creative_radar_api/v1/top_ads/list';
    protected string $url = 'https://www.tiktok.com/api/recommend/item_list/?aid=1988&app_language=en&app_name=tiktok_mobile&battery_info=0.89&browser_language=en&browser_name=Mozilla&browser_online=true&browser_platform=Win32&browser_version=5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F107.0.0.0%20Safari%2F537.36&channel=tiktok_web&cookie_enabled=true&count=30&device_id=7166983739917469189&device_platform=web_pc&focus_state=true&from_page=fyp&history_len=2&is_fullscreen=false&is_page_visible=true&language=en&os=windows&priority_region=MA&referer=&region=ES&screen_height=768&screen_width=1366&tz_name=Europe%2FParis&verifyFp=verify_lal74gs6_LEcmpSZm_bFJ7_4boU_AQYd_Yk2RlVfsu2Qw&webcast_language=en&msToken=OYuDgxjQ7fGXQ6Vrnj3uijHTaGHbHKqnIY4ba3pfT29VROAohlO9adw9-5HmPnXNhEylNCNqFD7VMVhd1rMdHg6YApw0zTqykUGTuydgYu2yhqoreAQVo5bDuvYlRkV0Xrj1vo0=&X-Bogus=DFSzswVLHakANtdJS8sPYcYklTIH&_signature=_02B4Z6wo000017fQKFwAAIDCaaZw-ApDh3u30CzAAI6Laa';
    protected array $params = ['page', 'limit', 'period_type', 'order_by', 'search_type'];

    public function __construct()
    {
        $this->client = new GuzzleHttpClient();
    }


    public function send()
    {
        try {
            return  $this->client->get($this->url, $this->params);
        } catch (RequestException  $e) {
            Log::error($e->getMessage());
        }
    }

    public function getparams()
    {
        return $this->params;
    }

    public function setParams(array $values = [])
    {
        foreach ($this->params as $param) {
            if (isset($values[$param]))
                $this->params[$param] = $values[$param];
        }
        return $this->params;
    }
}
