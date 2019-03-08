<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\Account;

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
          'banks' => Bank::all(),
        ]
      );
    }

    public function create(Request $request)
    {
        $account_title = Account::where([
          'user_id' => session('user')->id, 'bank_id' => $request['bank'], 'title' => $request['title']
        ]);
        if ($account_title->count() > 0) {
            return redirect('accounts')->withErrors('This account information already exists.');
        }

        if ($request['account_number'] != '') {
            $account_number = Account::where(['user_id' => session('user')->id, 'account_number' => $request['account_number']]);
            if ($account_number->count() > 0) {
                return redirect('accounts')->withErrors('This account number already exists with ' . $account_number->first()->bank->title);
            }
        }

        if ($request['routing_number'] != '') {
            $routing_number = Account::where(['user_id' => session('user')->id, 'routing_number' => $request['routing_number']]);
            if ($routing_number->count() > 0) {
                return redirect('accounts')->withErrors('This routing number already exists with ' . $routing_number->first()->bank->title);
            }
        }

        if ($request['debit_card_number'] != '') {
            $debit_card_number = Account::where(['user_id' => session('user')->id, 'debit_card_number' => $request['debit_card_number']]);
            if ($debit_card_number->count() > 0) {
                return redirect('accounts')->withErrors('This debit card already exists with ' . $debit_card_number->first()->bank->title);
            }
        }

        $account = new Account();
        $account->user_id = session('user')->id;
        $account->bank_id = $request['bank'];
        $account->title = $request['title'];
        $account->account_number = $request['account_number'];
        $account->routing_number = $request['routing_number'];
        $account->debit_card_number = $request['debit_card_number'];
        $account->expiry = $request['expiry'];
        $account->security_code = $request['security_code'];

        if ($account->save()) {
            return redirect('accounts');
        } else {
            return redirect('accounts')->withErrors('The system encountered some problem adding the account. Please try again.');
        }
    }
}
