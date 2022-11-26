<?php

namespace App\Observers;

use App\Models\Product;
use App\Services\ProductService;

class ProductObserver
{
    public function __construct(public ProductService $productService)
    {
    }
    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        $this->productService->clearCache($product->store_id);
        $this->productService->clearCache();
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        $this->productService->clearCache($product->store_id);
        $this->productService->clearCache();
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        $this->productService->clearCache($product->store_id);
        $this->productService->clearCache();
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        $this->productService->clearCache($product->store_id);
        $this->productService->clearCache();
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        $this->productService->clearCache($product->store_id);
        $this->productService->clearCache();
    }
}
