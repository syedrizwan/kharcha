<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Budget;
use App\Account;
use App\Category;

class Transaction extends Model
{
    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
