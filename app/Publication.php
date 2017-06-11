<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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


}
