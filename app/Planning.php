<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
  public function budget()
  {
    return $this->belongsTo(Budget::class);
  }
}
