<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
  public function budget()
  {
    return $this->belongsTo(Budget::class);
  }
}
