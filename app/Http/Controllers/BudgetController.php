<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;

class BudgetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    }

    public function set_current_budget($budget_id)
    {
        $budget = Budget::where('id', $budget_id)->first();

        session(['current_budget_id' => $budget->id]);
        session(['current_budget_title' => $budget->title]);

        return back();
    }
}
