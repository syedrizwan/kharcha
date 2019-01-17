<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function incomes()
  {
    return $this->hasMany(Income::class);
  }

  public function plannings()
  {
    return $this->hasMany(Planning::class);
  }

  public function expenses()
  {
    return $this->hasMany(Expense::class);
  }
}
