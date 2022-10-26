<?php

namespace App\Observers;

use App\Mail\DemoMail;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;

class UserObserver
{

    public $userService;

    public function __construct()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
        $this->userService = new UserService;
    }
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $this->userService->clearCache();
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        $this->userService->clearCache();

    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        $this->userService->clearCache();
    }

    /**
     * Handle the User "reUserd" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function reUserd(User $user)
    {
        $this->userService->clearCache();
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        $this->userService->clearCache();
    }
}
