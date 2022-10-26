<?php

namespace App\Http\Livewire\Owner;

use App\Facades\UserFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class OwnerList extends Component
{
    use LivewireAlert;

    public function delete(int $userId)
    {
        try {
            UserFacade::delete($userId);
            $message = __('The owner is deleted successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }


    private function getOwners()
    {
        return UserFacade::getOwners();
    }



    public function render()
    {
        return view('livewire.owner.owner-list', ['owners' => $this->getOwners()]);
    }
}
