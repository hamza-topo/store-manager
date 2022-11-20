<?php

namespace App\Http\Livewire\Customer;

use App\Facades\CustomerFacade;
use Livewire\Component;

class CustomerList extends Component
{
    public function render()
    {
        return view('livewire.customer.customer-list',['customers'=>CustomerFacade::getAll()]);
    }
}
