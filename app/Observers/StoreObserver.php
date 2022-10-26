<?php

namespace App\Observers;

use App\Models\Store;
use App\Services\StoreService;

class StoreObserver
{
    public $storeService;

    public function __construct()
    {
        $this->StoreService = new StoreService;
    }
    /**
     * Handle the Store "created" event.
     *
     * @param  \App\Models\Store  $store
     * @return void
     */
    public function created(Store $store)
    {
        $this->StoreService->clearCache();
    }

    /**
     * Handle the Store "updated" event.
     *
     * @param  \App\Models\Store  $store
     * @return void
     */
    public function updated(Store $store)
    {
        $this->StoreService->clearCache();

    }

    /**
     * Handle the Store "deleted" event.
     *
     * @param  \App\Models\Store  $store
     * @return void
     */
    public function deleted(Store $store)
    {
        $this->StoreService->clearCache();
    }

    /**
     * Handle the Store "restored" event.
     *
     * @param  \App\Models\Store  $store
     * @return void
     */
    public function restored(Store $store)
    {
        $this->StoreService->clearCache();
    }

    /**
     * Handle the Store "force deleted" event.
     *
     * @param  \App\Models\Store  $store
     * @return void
     */
    public function forceDeleted(Store $store)
    {
        $this->StoreService->clearCache();
    }
}
