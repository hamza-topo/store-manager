<?php

namespace App\Services;

use App\Enums\Product as EnumsProduct;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class ProductService implements Service
{

    public function create(array $product = [])
    {
        return Product::create($product);
    }

    public function edit(int $id, array $product = [])
    {
        $newProduct = $this->findById($id);
        $newProduct->update($product);
        $newProduct->refresh();
        return $newProduct;
    }

    public function findById(int $id)
    {
        return Product::find($id);
    }

    public function delete(int $id)
    {
        return Product::destroy($id);
    }

    public function getAll(): Collection
    {
        return Cache::remember(EnumsProduct::LIST_PRODUCTS_, EnumsProduct::CACHE_TIME, function () {
            return Product::all();
        });
    }

    public function getByStoreId(int $storeId): Collection
    {
        return Cache::remember(EnumsProduct::LIST_PRODUCTS_ . $storeId, EnumsProduct::CACHE_TIME, function () use ($storeId) {
            return Product::where('store_id', $storeId)->with('store')->get();
        });
    }

    public function clearCache(int|null $storeId = null)
    {
        return Cache::forget(EnumsProduct::LIST_PRODUCTS_ . $storeId);
    }
}
