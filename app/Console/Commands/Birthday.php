<?php

namespace App\Console\Commands;

use App\Services\CampaignService;
use App\Services\StoreService;
use Illuminate\Console\Command;

class Birthday extends Command
{

    public function __construct(protected StoreService $storeService,protected CampaignService $campaignService)
    {
        parent::__construct();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:birthday-camp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'daily birthday campaign';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = $this->campaignService->getCampaignsBirthday();
        dd($data);
        return 0;
    }
}
