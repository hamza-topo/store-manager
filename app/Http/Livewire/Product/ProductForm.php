<?php

namespace App\Http\Livewire\Product;

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


    public function save()
    {
        try {
            if (!empty($this->product['image'])) {
                //TODO:add product Id to path
                $path = $this->product['image']->store('images/' . $this->product['image'] . '/products');
                $this->product['image'] = $path;
            }
            $product = ProductFacade::create($this->product);
            $message = __('The store is  created successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            dd($e->getMessage(),$this->product);
            $this->alert('warning', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.product.product-form', ['stores' => StoreFacade::getAll()]);
    }
}
