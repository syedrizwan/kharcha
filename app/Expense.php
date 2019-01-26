<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{

  public function bill()
  {
    return $this->belongsTo(Bill::class);
}
  public function budget()
  {
    return $this->belongsTo(Budget::class);
  }
}
