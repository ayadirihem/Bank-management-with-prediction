<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = ['id', 'name', 'email', 'username', 'access', 'manager_id', 'pwd', 'password', 'active', 'photo','latitude','longitude'];

    
}
