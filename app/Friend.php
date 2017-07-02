<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{

   public function user1()
    {
        return $this->belongsTo('App\User', 'idUser1', 'id');
    }

   public function user2()
    {
        return $this->belongsTo('App\User', 'idUser2', 'id');
    }

}
