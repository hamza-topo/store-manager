<?php

namespace App\Http\Livewire\Product;

use App\Facades\ProductFacade;
use App\Facades\StoreFacade;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductList extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public int $storeId = 0;
    public $productsUpload;
    public $products;




    public function mount()
    {
        $this->getProducts();
    }

    public function getProducts()
    {
        $this->products =  $this->storeId != 0 ? ProductFacade::getByStoreId($this->storeId) : ProductFacade::getAll();
    }

    public function delete(int $productId)
    {
        try {
            ProductFacade::delete($productId);
            $message = __('The product is deleted successfully');
            $this->alert('success', $message);
            $this->getProducts();
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.product.product-list', ['stores' => StoreFacade::getAll()]);
    }
}
