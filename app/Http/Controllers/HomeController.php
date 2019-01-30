<?php

namespace App\Http\Controllers;

use App\Planning;
use App\Income;
use App\Expense;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home')->with(
          ['title' => 'Dashboard',
          'dashboard_menu' => 'active',
          'summary' => $this->dashboard_counts()]
        );
    }

    public function verify_email()
    {
        if (session('user')->email_verified_at != null) {
            return redirect(route('home'));
        }

        return view('verify-email')->with(
          ['title' => 'Verify your Email']
        );
    }

    private function dashboard_counts()
    {
        $counts = array();

        $counts['planned_income'] = Planning::where(['budget_id' => session('current_budget_id'), 'category_id' => null])->sum('amount');
        $counts['actual_income'] = Income::where('budget_id', session('current_budget_id'))->sum('amount');
        $counts['planned_expense'] = Planning::where(['budget_id' => session('current_budget_id'), 'account_id' => null])->sum('amount');
        $counts['actual_expense'] = Expense::where('budget_id', session('current_budget_id'))->sum('amount');
        ;
        $counts['planned_savings'] = $counts['planned_income'] - $counts['planned_expense'];
        $counts['actual_savings'] = $counts['actual_income'] - $counts['actual_expense'];

        return $counts;
    }
}
