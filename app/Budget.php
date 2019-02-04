<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Bill;
use App\Planning;
use App\Transaction;

class Budget extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
