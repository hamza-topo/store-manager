<?php

namespace App\Services;

use App\Enums\Customer as EnumsCustomer;
use App\Mail\NewCustomerMail;
use App\Models\Customer;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CustomerService implements Service
{

    public function create(array $customer = []): Customer
    {
        return Customer::create($customer);
    }

    public function edit(int $id, array $customer = [])
    {
        $newCustomer = $this->findById($id);
        $newCustomer->update($customer);
        $newCustomer->refresh();
        return $newCustomer;
    }

    public function delete(int $id)
    {
        return Customer::destroy($id);
    }

    public function findById(int $id)
    {
        return Customer::find($id);
    }

    public function getByStoreIdAndType(int $storeId, int $type): Customer|null
    {
        return Customer::where('storeId', $storeId)->where('campaign_type', $type)->first();
    }

    public function getAll(): Collection
    {
        return Cache::remember(EnumsCustomer::LIST_CUSTOMERS, EnumsCustomer::CACHE_TIME, function () {
            return Customer::all();
        });
    }

    public function clearCache()
    {
        return Cache::forget(EnumsCustomer::LIST_CUSTOMERS);
    }

    public function sendWelcomeMessgeMail(Customer $customer){
        Log::info('run the service');
        Mail::to($customer->email)->send(new NewCustomerMail($customer));
    }
}
