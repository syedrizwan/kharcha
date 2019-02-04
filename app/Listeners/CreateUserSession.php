<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class CreateUserSession
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        // Get settings and set them in session
        $current_budget = $event->user->budgets()->where('default', true)->first();
        session(['current_budget_id' => $current_budget->id]);
        session(['current_budget_title' => $current_budget->title]);

        $settings = array();
        foreach ($event->user->settings()->get() as $setting) {
            $settings[$setting->title] = $setting->value;
        }
        session(['settings' => $settings]);

        // Get current user and set in session
        session(['user' => $event->user]);
    }

    public function on_login(Login $event)
    {
        // Get settings and set them in session
        $current_budget = $event->user->budgets()->where('default', true)->first();
        session(['current_budget_id' => $current_budget->id]);
        session(['current_budget_title' => $current_budget->title]);
        
        $settings = array();
        foreach ($event->user->settings()->get() as $setting) {
            $settings[$setting->title] = $setting->value;
        }
        session(['settings' => $settings]);

        // Get current user and set in session
        session(['user' => $event->user]);
    }
}
