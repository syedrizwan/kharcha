<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Planning;
use App\Transaction;

class Category extends Model
{
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
