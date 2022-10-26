<?php

namespace App\Services;

use App\Enums\Activity as EnumsActivity;
use App\Models\Activity;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class ActivityService implements Service
{

    public function create(array $activity = [])
    {
        return Activity::create($activity);
    }

    public function edit(int $id, array $activity = [])
    {
        $newActivity = $this->findById($id);
        $newActivity->update($activity);
        $newActivity->refresh();
        return $newActivity;
    }

    public function findById(int $id)
    {
        return Activity::find($id);
    }

    public function delete(int $id)
    {
        return Activity::destroy($id);
    }

    public function getAll(): Collection
    {
        return Cache::remember(EnumsActivity::LIST_ACTIVITIES, EnumsActivity::CACHE_TIME, function () {
            return Activity::all();
        });
    }

    public function clearCache()
    {
        return Cache::forget(EnumsActivity::LIST_ACTIVITIES);
    }
}
