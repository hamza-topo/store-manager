<?php

namespace App\Providers;

use App\Events\NewCustomerEvent;
use App\Listeners\CustomerCreatedListener;
use App\Models\Activity;
use App\Models\Campaign;
use App\Models\Customer;
use App\Models\Store;
use App\Models\User;
use App\Observers\ActivityObserver;
use App\Observers\CampaignObserver;
use App\Observers\CustomerObserver;
use App\Observers\StoreObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        NewCustomerEvent::class => [
            CustomerCreatedListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Store::observe(StoreObserver::class);
        User::observe(UserObserver::class);
        Campaign::observe(CampaignObserver::class);
        Activity::observe(ActivityObserver::class);
        Customer::observe(CustomerObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
