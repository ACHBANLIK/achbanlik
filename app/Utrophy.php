<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Utrophy extends Model
{
    public function trophy()
    {
        return $this->belongsTo('App\Trophy', 'idTrophy', 'id');
    }
}

