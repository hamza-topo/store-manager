<?php

namespace App\Http\Livewire\Product;

use App\Facades\StoreFacade;
use Livewire\Component;

class ProductForm extends Component
{

    public array $product = [];

    public function render()
    {
        return view('livewire.product.product-form', ['stores' => StoreFacade::getAll()]);
    }
}
