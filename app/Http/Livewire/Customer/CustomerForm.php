<?php

namespace App\Http\Livewire\Customer;

use App\Facades\CustomerFacade;
use App\Facades\StoreFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CustomerForm extends Component
{
    use LivewireAlert;
    public array $customer = [];

    public function save()
    {
        try {
            //TODO::validation rules on phone, name, email.
            $customer = CustomerFacade::create($this->customer);
            $message = __('The customer is  created successfully');
            $this->alert('success', $message);
            // if(isset($this->customer['id']))
            //     $this->refresh('customer');
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.customer.customer-form',['stores'=>StoreFacade::getAll()]);
    }
}
