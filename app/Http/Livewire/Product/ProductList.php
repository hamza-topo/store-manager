<?php

namespace App\Http\Livewire\Product;

use App\Facades\ProductFacade;
use App\Facades\StoreFacade;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductList extends Component
{
    use WithFileUploads;

    public int $storeId =0;
    public $productsUpload;
    public array $products;

    public function updatedStoreId()
    {
        if($this->storeId!=0)
          $this->products = ProductFacade::getByStoreId($this->storeId);
    }


    public function render()
    {
        return view('livewire.product.product-list', ['stores' =>[]]);
    }
}
