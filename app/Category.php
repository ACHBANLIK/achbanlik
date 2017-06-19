<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    protected $fillable = [
        'title_fr','title_en', 'description','photo','idAdmin',
    ];


}
