<?php

namespace App\Observers;

use App\Events\NewCustomerEvent;
use App\Models\Customer;
use App\Services\CustomerService;
use Illuminate\Support\Facades\Log;

class CustomerObserver
{
    public $customerService;

    public function __construct()
    {
        $this->customerService = new CustomerService;
    }
    /**
     * Handle the Customer "created" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function created(Customer $customer)
    {
        $this->customerService->clearCache();
        Log::info('begin event New customer Event');
        NewCustomerEvent::dispatch($customer);
    }

    /**
     * Handle the Customer "updated" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function updated(Customer $customer)
    {
        $this->customerService->clearCache();
    }

    /**
     * Handle the Customer "deleted" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function deleted(Customer $customer)
    {
        $this->customerService->clearCache();
    }

    /**
     * Handle the Customer "restored" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function restored(Customer $customer)
    {
        $this->customerService->clearCache();
    }

    /**
     * Handle the Customer "force deleted" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function forceDeleted(Customer $customer)
    {
        $this->customerService->clearCache();
    }
}
