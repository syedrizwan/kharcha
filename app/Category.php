<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user()
    {
<<<<<<< HEAD
      return $this->belongTo(User::class);
    }

    public function plannings()
    {
      return $this->hasMany(Expense::class);
=======
      return $this->belongsTo(User::class);
>>>>>>> 13bf73c8067a7a6314176860978cb036ea77e464
    }
}
