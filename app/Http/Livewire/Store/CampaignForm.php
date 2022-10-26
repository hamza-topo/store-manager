<?php

namespace App\Http\Livewire\Store;

use App\Enums\ModelCampaign;
use App\Facades\CampaignFacade;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CampaignForm extends Component
{
    use LivewireAlert;
    public array $birthday = [];
    public bool $show = false;
    public int|null $storeId = null;
    public function getListeners()
    {
        return  [
            'showCampaignForm' => 'show'
        ];
    }

    public function mount(int|null $storeId)
    {
        if ($storeId) {
            $birthday = CampaignFacade::getByStoreIdAndType($storeId, ModelCampaign::BIRTHDAY);
            $this->storeId = $storeId;
            $this->birthday = !empty($birthday) ? $birthday->toArray() : [];
            $this->show = true;
        }
    }

    public function save(int $type)
    {
        $this->birthday['campaignType'] = $type;
        $this->birthday['storeId'] = $this->storeId;
        try {
            CampaignFacade::create($this->birthday);
            CampaignFacade::clearCache();
            $message = __('La campaign a été crée avec succes');
            $this->alert('success', $message);
        } catch (Exception $e) {
            // dd($e->getMessage());
            $this->alert('warning', $e->getMessage());
        }
    }

    public function update(int $birthdayId, int $type)
    {
        $this->birthday['campaignType'] = $type;
        $this->birthday['storeId'] = $this->storeId;
        try {
            CampaignFacade::edit($birthdayId, $this->birthday);
            CampaignFacade::clearCache();
            $message = __('La campaign a été modifier avec succes');
            $this->alert('success', $message);
        } catch (Exception $e) {
            dd($e->getMessage());
            $this->alert('warning', $e->getMessage());
        }
    }

    public function show(int $storeId)
    {
        $this->show = true;
        $this->storeId = $storeId;
    }

    public function render()
    {
        return view('livewire.store.campaign-form');
    }
}
