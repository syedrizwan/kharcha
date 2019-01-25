<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
<<<<<<< HEAD
    public function user(){
      return $this->belongsTo(User::class);
    }

    public function bills()
    {
      return $this->hasMany(Bill::class);
    }

    public function plannings()
    {
      return $this->hasMany(BudgetPlanning::class);
    }

    public function incomes()
    {
      return $this->hasMany(Income::class);
    }
=======
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
>>>>>>> 13bf73c8067a7a6314176860978cb036ea77e464
}
