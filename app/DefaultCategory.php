<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultCategory;

class DefaultCategory extends Model
{
    public function children()
    {
        return $this->hasMany(DefaultCategory::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(DefaultCategory::class, 'parent_id', 'id');
    }
}
