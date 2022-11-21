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


    public function mount(int|null $customerIdUpdated = null)
    {
        if (!empty($customerIdUpdated)) {
            $this->customer = CustomerFacade::findById($customerIdUpdated)->toArray();
        }
    }

    public function save()
    {
        try {
            //TODO::validation rules on phone, name, email.
            $customer = CustomerFacade::create($this->customer);
            $message = __('The customer is  created successfully');
            $this->alert('success', $message);
            //TODO:refresh the form if user created
            // if(isset($this->customer['id']))
            //     $this->refresh('customer');
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function update()
    {
        try {
            $owner = CustomerFacade::edit($this->customer['id'],$this->customer);
            $message = __('The Customer is updated successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.customer.customer-form', ['stores' => StoreFacade::getAll()]);
    }
}
