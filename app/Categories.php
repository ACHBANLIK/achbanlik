<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Categories extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'title' , 'description','icone','idAdmin',
    ];


}
