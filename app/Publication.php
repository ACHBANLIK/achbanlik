<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Auth;
use Carbon\Carbon;

class Publication extends Model
{


	public function user()
	{
		return $this->belongsTo('App\User'  , 'idUser'  , 'id');
	}

	public function category()
	{
		return $this->belongsTo('App\Category'  , 'idCategory'  , 'id');
	}

	public function type()
	{
		return $this->belongsTo('App\Type'  , 'idType'  , 'id');
	}

    public function comments()
    {
        return $this->hasMany('App\Comment' , 'idPublication'  , 'id');
    }

    public function opinions()
    {
        return $this->hasMany('App\Opinion' , 'idPublication'  , 'id');
    }

    public function signals()
    {
        return $this->hasMany('App\Psignal' , 'idPublication'  , 'id');
    }



    public function isEnded()
    {

        $deadline = Carbon::parse($this->willend_at);

        $diff = Carbon::now()->diffInDays( $deadline );


        if($diff <= 0)
            return  true;
        else
            return false;
    }



    public function doesUserVotedUp()
    {
    	if($this->opinions()
            ->where('idUser' , Auth::user()->id)
            ->where('choice' , 1)
            ->count()>=1)
   			return  true;
   		else
   			return false;
    }



    public function doesUserVotedDown()
    {
        if($this->opinions()
            ->where('idUser' , Auth::user()->id)
            ->where('choice' , 2)
            ->count()>=1)
            return  true;
        else
            return false;
    }


    public function doesUserSignaled()
    {
        if($this->signals()
            ->where('idUser' , Auth::user()->id)
            ->count()>=1)
            return  true;
        else
            return false;
    }

}
