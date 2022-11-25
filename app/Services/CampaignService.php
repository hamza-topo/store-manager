<?php

namespace App\Services;

use App\Enums\Campaign as EnumsCampaign;
use App\Enums\ModelCampaign;
use App\Models\Campaign;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CampaignService implements Service
{

    public function create(array $campaign = []): Campaign
    {
        return Campaign::create($campaign);
    }

    public function edit(int $id, array $campaign = [])
    {
        $newCampaign = $this->findById($id);
        $newCampaign->update($campaign);
        $newCampaign->refresh();
        return $newCampaign;
    }

    public function delete(int $id)
    {
        return Campaign::destroy($id);
    }

    public function findById(int $id)
    {
        return Campaign::find($id);
    }

    public function getByStoreIdAndType(int $storeId, int $type): Campaign|null
    {
        return Campaign::where('store_id', $storeId)->where('campaign_type', $type)->first();
    }

    public function getAll(): Collection
    {
        // return Cache::remember(EnumsCampaign::LIST_CAMPAIGNS,EnumsCampaign::CACHE_TIME,function(){
        return Campaign::all();
        // });
    }

    public function getCampaignsBirthday(): Collection
    {
        return Campaign::where('campaign_type', ModelCampaign::BIRTHDAY)->with('store', function ($query) {
            return $query->select('id', 'sender_id');
        })->get();
    }

    public function getBulk(): Collection
    {
        return Campaign::where('is_bulk', true)->get();
    }

    public function clearCache()
    {
        return Cache::forget(EnumsCampaign::LIST_CAMPAIGNS);
    }
}
