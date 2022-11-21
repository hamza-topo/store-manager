<?php

namespace App\Http\Livewire\Customer;

use App\Facades\CustomerFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CustomerList extends Component
{
    use LivewireAlert;

    public function delete(int $customerId)
    {
        try {
            CustomerFacade::delete($customerId);
            $message = __('The Customer is deleted successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    private function getCustomers()
    {
        return CustomerFacade::getAll();
    }


    public function render()
    {
        return view('livewire.customer.customer-list', ['customers' => $this->getCustomers()]);
    }
}
