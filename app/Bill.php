<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function budget()
    {
      return $this->belongsTo(Budget::class);
    }

    public function expenses()
    {
      return $this->hasMany(Expense::class);
    }
}
