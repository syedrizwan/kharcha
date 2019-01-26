<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
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
}
