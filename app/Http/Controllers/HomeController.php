<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

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
        if (Auth::User()->categories()->count() == 0 || Auth::User()->budgets()->count() == 0) {
            return redirect('setup');
        }

        return view('home')->with(
          ['title' => 'Dashboard',
          'dashboard_menu' => 'active']
        );
    }

    public function setup()
    {
        if (Auth::User()->categories()->count() > 0 && Auth::User()->budgets()->count() > 0) {
            return redirect('setup');
        }
        
        return view('setup')->with(
        ['title' => 'Application Setup']
      );
    }
}
