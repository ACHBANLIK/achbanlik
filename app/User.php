<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
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

   public function comments()
    {
        return $this->hasMany('App\Comment', 'idUser', 'id');
    }


   public function utrophies()
    {
        return $this->hasMany('App\Utrophy', 'idUser', 'id');
    }


public function isMyFriend()
{
    $count = Friend::where('idUser1' , Auth::user()->id)->where('idUser2' , $this->id)->where('status' , 1)
                  ->orWhere('idUser2' , Auth::user()->id)->where('idUser1' , $this->id)->where('status' , 1)
                  ->count();
    if($count>0)
        return true;
    else  
        return false;
}

public function didInviteHim()
{
    $count = Friend::where('idUser1' , Auth::user()->id)->where('idUser2' , $this->id)->where('status' , 0)
                  ->count();
    if($count>0)
        return true;
    else  
        return false;
}



public function didInviteMe()
{
    $count = Friend::where('idUser2' , Auth::user()->id)->where('idUser1' , $this->id)->where('status' , 0)
                  ->count();
    if($count>0)
        return true;
    else  
        return false;
}

public function addTrophy($trophy)
{
    $utrophy  = new Utrophy();
    $utrophy->idUser = Auth::user()->id;
    $utrophy->idTrophy  = $trophy;
    $utrophy->save();
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
