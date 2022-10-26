<?php

namespace App\Http\Livewire\Campaign;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Facades\CampaignFacade;
use Exception;
use Livewire\Component;

class Campaigns extends Component
{
    use LivewireAlert;

    public function delete(int $id){
       
        try {
            CampaignFacade::delete($id);
            CampaignFacade::clearCache();
            $message = __('La campaign a été supprimé avec succes');
            $this->alert('success', $message);
        } catch (Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
       
    }

    public function render()
    {
        return view('livewire.campaign.campaigns', ['campaigns' => CampaignFacade::getAll()]);
    }
}
