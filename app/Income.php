<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
  public function budget()
  {
    return $this->belongsTo(Budget::class);
  }

  public function account()
  {
    return $this->belongsTo(Account::class);
  }
}
