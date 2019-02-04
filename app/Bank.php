<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;

class Bank extends Model
{
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
