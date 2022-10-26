<?php

namespace App\Http\Livewire\Employer;

use App\Enums\User;
use App\Facades\StoreFacade;
use App\Facades\UserFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EmployerForm extends Component
{
    use LivewireAlert;
    public array $employer = [];
    public int|null $employerId= null;
    public int|null $employerIdUpdated= null;


    public function mount(int|null $employerIdUpdated = null)
    {
        if (!empty($employerIdUpdated)){
            $this->employer = UserFacade::findById($employerIdUpdated)->toArray();
        }
        //TODO: get this entities
        // $this->owners = UserFacade::getOwners();
        // $this->activities = ActivityFacade::getAll();
    }

    public function save()
    {
        try {
            $this->employer['isAdmin'] = User::IS_EMPLOYER;
            $employer = UserFacade::create($this->employer);
            $this->employerId = $employer->id;
            $message = __('The employer is  created successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function update()
    {
        try {
            $this->employer['isAdmin'] = User::IS_EMPLOYER;
            $employer = UserFacade::edit($this->employer['id'],$this->employer);
            $message = __('The Employer is  created successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.employer.employer-form',['stores'=>StoreFacade::getAll()]);
    }
}
