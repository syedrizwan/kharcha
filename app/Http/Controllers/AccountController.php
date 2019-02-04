<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('accounts.main')->with(
        [
          'title' => 'Accounts',
          'accounts' => session('user')->accounts()->get(),
        ]
      );
    }
}
