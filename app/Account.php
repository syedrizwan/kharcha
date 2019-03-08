<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use App\Bank;
use App\Planning;
use App\Transaction;

class Account extends Model
{
    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function get_balance()
    {
        // TODO: fix following logic to add account with the information
        $income = $this->transactions()->whereIn('category_id', function ($query) {
            $income_id = session('user')->categories()->where('title', 'Income')->first()->id;
            $query->select('id')->from('categories')->where('parent_id', $income_id);
        })->sum('amount');

        $expense = $this->transactions()->whereIn('category_id', function ($query) {
            $income_id = session('user')->categories()->where('title', 'Income')->first()->id;
            $query->select('id')->from('categories')->where('parent_id', '!=', $income_id);
        })->sum('amount');

        return $income - $expense;
    }
}
