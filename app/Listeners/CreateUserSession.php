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
        $settings = array();
        foreach (Auth::User()->settings()->get() as $setting) {
            $settings[$setting->title] = $setting->value;
        }
        session(['settings' => $settings]);

        // Get current user and set in session
        session(['user' => Auth::User()]);
    }

    public function on_login(Login $event)
    {
      // Get settings and set them in session
      $settings = array();
      foreach (Auth::User()->settings()->get() as $setting) {
          $settings[$setting->title] = $setting->value;
      }
      session(['settings' => $settings]);

      // Get current user and set in session
      session(['user' => Auth::User()]);
    }
}
