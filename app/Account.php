<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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
}
