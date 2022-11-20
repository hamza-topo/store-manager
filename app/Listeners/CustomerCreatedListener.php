<?php

namespace App\Listeners;

use App\Services\CustomerService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class CustomerCreatedListener
{
    public CustomerService $customeService;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->customeService = new CustomerService;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Log::info("begin customer created Listner");
        $this->customeService->sendWelcomeMessgeMail($event->customer);
    }
}
