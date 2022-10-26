<?php

namespace App\Http\Livewire\Owner;

use App\Enums\User;
use App\Facades\UserFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class OwnerForm extends Component
{
    use LivewireAlert;
    public array $owner = [];
    public int|null $ownerId= null;
    public int|null $ownerIdUpdated= null;


    public function mount(int|null $ownerIdUpdated = null)
    {
        if (!empty($ownerIdUpdated)){
            $this->owner = UserFacade::findById($ownerIdUpdated)->toArray();
        }
        //TODO: get this entities
        // $this->owners = UserFacade::getOwners();
        // $this->activities = ActivityFacade::getAll();
    }

    public function save()
    {
        try {
            $this->owner['isAdmin'] = User::IS_OWNER;
            $owner = UserFacade::create($this->owner);
            $this->ownerId = $owner->id;
            $message = __('The Owner is  created successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function update()
    {
        try {
            $this->owner['isAdmin'] = User::IS_OWNER;
            $owner = UserFacade::edit($this->owner['id'],$this->owner);
            $message = __('The Owner is  created successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }



    public function render()
    {
        return view('livewire.owner.owner-form');
    }
}
