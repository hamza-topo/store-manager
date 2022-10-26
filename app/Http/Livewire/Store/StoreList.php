<?php

namespace App\Http\Livewire\Store;

use App\Facades\StoreFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class StoreList extends Component
{
    use LivewireAlert;

    public function delete(int $storeId)
    {
        try {
            StoreFacade::delete($storeId);
            $message = __('The store is deleted successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    private function getStores()
    {
        return StoreFacade::getAll();
    }

    public function render()
    {

        return view('livewire.store.store-list', ['stores' => $this->getStores()]);
    }
}
