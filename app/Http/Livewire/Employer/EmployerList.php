<?php

namespace App\Http\Livewire\Employer;

use App\Facades\UserFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EmployerList extends Component
{
    use LivewireAlert;

    public function delete(int $userId)
    {
        try {
            UserFacade::delete($userId);
            $message = __('The Employer is deleted successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }


    private function getEmployers()
    {
        return UserFacade::getEmployers();
    }


    public function render()
    {
        return view('livewire.employer.employer-list',['employers'=>$this->getEmployers()]);
    }
}
