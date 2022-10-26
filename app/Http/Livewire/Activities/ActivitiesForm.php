<?php

namespace App\Http\Livewire\Activities;

use App\Facades\ActivityFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ActivitiesForm extends Component
{

    use LivewireAlert;
    public array $activity = [];


    public function save()
    {
        try {
            $activity = ActivityFacade::create($this->activity);
            $message = __('The activity is  created successfully');
            $this->alert('success', $message);
            $this->emit('refresh');

        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.activities.activities-form');
    }
}
