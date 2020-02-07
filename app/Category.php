<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function addvertises()
    {
        return $this->hasMany('App\Addvertise', 'cat');
    }
}
