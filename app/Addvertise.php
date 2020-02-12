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
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
    }
    public function category()
    {
        return $this->belongsTo(Category::class)->orderBy('created_at', 'DESC');;
    }

    
}
