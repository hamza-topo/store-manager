<?php

namespace App\Http\Livewire\Store;

use App\Facades\StoreFacade;
use App\Facades\UserFacade;
use App\Facades\ActivityFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreForm extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public array $store = [];
    public $owners;
    public $activities;
    public $logo;

    public function mount(int|null $storeId)
    {
        if (!empty($storeId)){
            $this->store = StoreFacade::findById($storeId)->toArray();
        }
         $this->owners = UserFacade::getOwners();
         $this->activities = ActivityFacade::getAll();
    }


    public function save()
    {
        try {
            if (!empty($this->logo)) {
                $path = $this->logo->store('logos');
                $this->store['logo'] = $path;
            }
            $store = StoreFacade::create($this->store);
            $message = __('The store is  created successfully');
            $this->alert('success', $message);
            if (!empty($store->id)) {
                $this->emit('showCampaignForm', $store->id);
            }
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function update()
    {
        try {
            if (!empty($this->logo)) {
                $path = $this->logo->store('logos');
                $this->store['logo'] = $path;
            }
            StoreFacade::edit($this->store['id'],$this->store);
            $message = __('The store is updated successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.store.store-form',['owners'=>UserFacade::getOwners()]);
    }
}
