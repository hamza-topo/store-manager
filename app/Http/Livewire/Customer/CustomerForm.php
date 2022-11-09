<?php

namespace App\Http\Livewire\Customer;

use App\Facades\StoreFacade;
use Livewire\Component;

class CustomerForm extends Component
{
    public array $customer = [];
    public function render()
    {
        return view('livewire.customer.customer-form',['stores'=>StoreFacade::getAll()]);
    }
}
