<?php

namespace App\Http\Livewire\Product;

use App\Enums\Path;
use App\Facades\ProductFacade;
use App\Facades\StoreFacade;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductForm extends Component
{

    use WithFileUploads;
    use LivewireAlert;

    public array $product = [];

    public function mount(int|null $productIdUpdated = null)
    {
        if (!empty($productIdUpdated)) {
            $this->product = ProductFacade::findById($productIdUpdated)->toArray();
        }
        //TODO: get this entities
        // $this->owners = UserFacade::getOwners();
        // $this->activities = ActivityFacade::getAll();
    }

    public function save()
    {
        try {
            if (!empty($this->product['image'])) {
                $path = $this->product['image']->store(Path::PRODUCTS_IMAGE_STORAGE_PATH . $this->product['store_id']);
                $this->product['image'] = $path;
            }
            $product = ProductFacade::create($this->product);
            $message = __('The store is  created successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }



    public function render()
    {
        return view('livewire.product.product-form', ['stores' => StoreFacade::getAll()]);
    }
}
