<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user()
    {

      return $this->belongTo(User::class);
    }

    public function plannings()
    {
      return $this->hasMany(Expense::class);
    }
}
