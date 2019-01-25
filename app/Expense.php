<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
<<<<<<< HEAD
  public function bill()
  {
    return $this->belongsTo(Bill::class);
=======
  public function budget()
  {
    return $this->belongsTo(Budget::class);
>>>>>>> 13bf73c8067a7a6314176860978cb036ea77e464
  }
}
