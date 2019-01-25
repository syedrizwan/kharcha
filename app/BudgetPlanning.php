<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetPlanning extends Model
{
  public function budget()
  {
    return $this->belongsTo(Budget::class);
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
