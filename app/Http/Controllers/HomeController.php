<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Budget;
use App\Planning;
use App\Income;
use App\Expense;
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
    public function index(Request $request)
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

        if (!$request->session()->has('current_budget')) {
            $current_budget = Auth::User()->budgets()->where('default', true)->first();
            $request->session()->put('current_budget_id', $current_budget->id);
            $request->session()->put('current_budget_title', $current_budget->title);
        }

        return view('home')->with(
          ['title' => 'Dashboard',
          'dashboard_menu' => 'active',
          'summary' => $this->dashboard_counts($request)]
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

    private function initial_setup()
    {

    }

    private function dashboard_counts($request)
    {
        $counts = array();

        $counts['planned_income'] = Planning::where(['budget_id' => $request->session()->get('current_budget_id'), 'category_id' => null])->sum('amount');
        $counts['actual_income'] = Income::where('budget_id', $request->session()->get('current_budget_id'))->sum('amount');
        $counts['planned_expense'] = Planning::where(['budget_id' => $request->session()->get('current_budget_id'), 'account_id' => null])->sum('amount');
        $counts['actual_expense'] = Expense::where('budget_id', $request->session()->get('current_budget_id'))->sum('amount');;
        $counts['planned_savings'] = $counts['planned_income'] - $counts['planned_expense'];
        $counts['actual_savings'] = $counts['actual_income'] - $counts['actual_expense'];

        return $counts;
    }
}
