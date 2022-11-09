<?php

namespace App\Console\Commands;

use App\Services\CampaignService;
use Illuminate\Console\Command;

class CampaignDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:daily-camp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'campaign daily it run a daily campaigns via sms or mail or bouth for customers';


    public function __construct(protected CampaignService $campaignService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $campaigns = $this->campaignService->getBulk();
        dd($campaigns);
        return 0;
    }
}
