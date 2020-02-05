<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addvertise extends Model
{
    //
    protected $guarded = [];
    protected $fillable = [
        'name', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
