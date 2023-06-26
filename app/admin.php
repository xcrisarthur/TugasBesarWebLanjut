<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class admin extends Model implements Authenticatable
{
    use Notifiable, AuthenticableTrait;

    protected $table = 'admin';
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'address',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
