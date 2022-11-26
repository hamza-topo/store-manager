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
    }

    public function save()
    {
        try {
            $this->moveImage();
            ProductFacade::create($this->product);
            $message = __('The product is  created successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function  update()
    {
        try {
            $this->moveImage();
            ProductFacade::edit($this->product['id'], $this->product);
            $message = __('The Product is updated successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }


    private function moveImage()
    {
        if (!empty($this->product['image'])) {
            $path = $this->product['image']->store(Path::PRODUCTS_IMAGE_STORAGE_PATH . $this->product['store_id']);
            $this->product['image'] = $path;
        }
    }

    public function render()
    {
        return view('livewire.product.product-form', ['stores' => StoreFacade::getAll()]);
    }
}
