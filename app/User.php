<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function country()
    {
        return $this->belongsTo('App\Country', 'idCountry', 'id');
    }



   public function publications()
    {
        return $this->hasMany('App\Publication', 'idUser', 'id');
    }


   public function opinions()
    {
        return $this->hasMany('App\Opinion', 'idUser', 'id');
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname' , 'lname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
