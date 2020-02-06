<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'email', 
    ];
    protected $hidden = [
        'confirm',
    ];
    public function addvertise()
    {
        return $this->belongsTo(Addvertise::class);
    }
}
