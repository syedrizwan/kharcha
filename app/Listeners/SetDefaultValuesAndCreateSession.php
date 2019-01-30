<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

use App\Budget;
use Carbon\Carbon;
use App\DefaultCategory;
use App\Category;
use App\DefaultSetting;
use App\Setting;

class SetDefaultValuesAndCreateSession
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // Create a default Budget
        $budget = new Budget();
        $budget->title = date('M') . '-' . date('Y') . ' Budget';
        $budget->user_id = Auth::User()->id;
        $budget->default = true;
        $budget->from = new Carbon('first day of this month');
        $budget->to = new Carbon('last day of this month');

        $budget->save();

        // Add default categories
        $dc = DefaultCategory::all();

        foreach ($dc as $cat) {
            $category = new Category();
            $category->title = $cat->title;
            $category->user_id = auth()->id();
            $category->save();
        }

        // Associate settings
        $ds = DefaultSetting::all();

        foreach ($ds as $set) {
            $setting = new Setting();
            $setting->title = $set->title;
            $setting->value = $set->value;
            $setting->user_id = auth()->id();
            $setting->save();
        }

        // Set the default budget as current
        $current_budget = Auth::User()->budgets()->where('default', true)->first();
        session(['current_budget_id' => $current_budget->id]);
        session(['current_budget_title' => $current_budget->title]);

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
