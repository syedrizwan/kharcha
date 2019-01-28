<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Budget;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::User()->email_verified_at == null) {
            return redirect(route('verify_email'));
        } else {
            if (Auth::User()->budgets()->count() == 0) {
                $budget = new Budget();
                $budget->title = date('M') . '-' . date('Y') . ' Budget';
                $budget->user_id = Auth::User()->id;
                $budget->default = true;
                $budget->from = new Carbon('first day of this month');
                $budget->to = new Carbon('last day of this month');

                $budget->save();
            }
            if (Auth::User()->categories()->count() == 0) {
                return redirect(route('add_default_categories'));
            }
        }
        return view('home')->with(
          ['title' => 'Dashboard',
          'dashboard_menu' => 'active']
        );
    }

    public function verify_email()
    {
        if (Auth::user()->email_verified_at != null) {
            return redirect(route('home'));
        }

        return view('verify-email')->with(
          ['title' => 'Verify your Email']
        );
    }
}
