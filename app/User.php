<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }


    public function categories()
    {
        return $this->hasMany(Category::class);
    }


    public function debts()
    {
        return $this->hasMany(Debt::class);
    }

    public function Settings()
    {
        return $this->hasMany(Setting::class);
    }
}
