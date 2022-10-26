<?php

namespace App\Http\Livewire\Activities;

use App\Facades\ActivityFacade;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ActivitiesList extends Component
{

    use LivewireAlert;

    protected $listeners = [
        'refresh' => 'getActivities'
    ];

    public function delete(int $activityId)
    {
        try {
            ActivityFacade::delete($activityId);
            $message = __('The Activity is deleted successfully');
            $this->alert('success', $message);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }

    public function getActivities()
    {
        return ActivityFacade::getAll();
    }

    public function render()
    {
        return view('livewire.activities.activities-list', ['activites' => $this->getActivities()]);
    }
}
