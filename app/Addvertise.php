<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Addvertise extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = [
        'name', 
    ];

    protected $dates = ['deleted_at'];

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
        return $this->hasOne(Category::class);
    }

    
}
