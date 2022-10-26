<?php

namespace App\Http\Livewire\Campaign;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Facades\CampaignFacade;
use Exception;
use Livewire\Component;

class CampaignCreate extends Component
{
    use LivewireAlert;

    public int $type = 2;
    public array $campaign = [];


    public function mount()
    {
        $this->campaign['type'] = 2;
        $this->campaign['is_bulk'] = 1;
    }

    public function create()
    {
        try {
            CampaignFacade::create($this->campaign);
            CampaignFacade::clearCache();
            $message = __('La campaign a été crée avec succes');
            $this->alert('success', $message);
        } catch (Exception $e) {
            dd($e->getMessage());
            $this->alert('warning', $e->getMessage());
        }
      
    }

    public function validateUnique()
    {
        $this->validate([
            'campaign.name' => 'required',
            'campaign.is_bulk' => 'required|in:0',
            'campaign.after_action' => 'required',
            'campaign.message' => 'required',
        ], [
            'campaign.name' => __('Le champ Nom est obligatoire'),
            'campaign.message' => __('Le champ Nom est obligatoire'),
            'campaign.is_bulk' => __('La campaign doit étre unique'),
            'campaign.after_action' => __('Le champ (apres action) est obligatoire'),
        ]);
    }

    public function validateBulk()
    {
    }

    public function render()
    {
        return view('livewire.campaign.campaign-create');
    }
}
