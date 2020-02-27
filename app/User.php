<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addvertises()
    {
        return $this->hasMany(Addvertise::class)->orderBy('created_at', 'DESC');
    }
    

    public function blogs()
    {
        return $this->hasMany(Article::class)->orderBy('created_at', 'DESC');
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }
    public function cantents()
    {
        return $this->hasMany(Contact::class);
    }

    public function commands()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    
}

