<?php

namespace App\Observers;

use App\Models\Activity;
use App\Services\ActivityService;

class ActivityObserver
{
    public $activityService;

    public function __construct()
    {
        $this->activityService = new ActivityService;
    }
    /**
     * Handle the Activity "created" event.
     *
     * @param  \App\Models\Activity $activity
     * @return void
     */
    public function created(Activity $activity)
    {
        $this->activityService->clearCache();
    }

    /**
     * Handle the Activity "updated" event.
     *
     * @param  \App\Models\Activity $activity
     * @return void
     */
    public function updated(Activity $activity)
    {
        $this->activityService->clearCache();

    }

    /**
     * Handle the Activity "deleted" event.
     *
     * @param  \App\Models\Activity $activity
     * @return void
     */
    public function deleted(Activity $activity)
    {
        $this->activityService->clearCache();
    }

    /**
     * Handle the Activity "reActivityd" event.
     *
     * @param  \App\Models\Activity $activity
     * @return void
     */
    public function reActivityd(Activity $activity)
    {
        $this->activityService->clearCache();
    }

    /**
     * Handle the Activity "force deleted" event.
     *
     * @param  \App\Models\Activity $activity
     * @return void
     */
    public function forceDeleted(Activity $activity)
    {
        $this->activityService->clearCache();
    }
}
