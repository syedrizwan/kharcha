<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function incomes()
    {
      return $this->hasMany(Income::class);
    }
}
