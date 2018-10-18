<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'roll', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'admin' => 'boolean',
    ];

    public function isAdmin()
    {
        return $this->admin;
    }
    
    public function data()
    {
        return $this->belongsTo('App\Data');
    }
    
    public function admit_card()
    {
        return $this->belongsTo('App\AdmitCard');
    }
}
