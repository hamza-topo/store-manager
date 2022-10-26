<?php

namespace App\Services;

use App\Enums\Store as EnumsStore;
use App\Models\Store;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class StoreService implements Service
{

    public function create(array $store = [])
    {
        return Store::create($store);
    }

    public function edit(int $id, array $store = [])
    {
        $newStore = $this->findById($id);
        $newStore->update($store);
        $newStore->refresh();
        return $newStore;
    }

    public function findById(int $id)
    {
        return Store::find($id);
    }

    public function delete(int $id)
    {
        return Store::destroy($id);
    }

    public function getAll(): Collection
    {
        return Cache::remember(EnumsStore::LIST_STORES, EnumsStore::CACHE_TIME, function () {
            return Store::all();
        });
    }

    public function clearCache()
    {
        return Cache::forget(EnumsStore::LIST_STORES);
    }
}
