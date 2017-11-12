<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
	 * Items in the array are arranged in the other they appear in the create_users_table migration file
     *
     * @var array
     */
    protected $fillable = [
		'name', 'email', 'password', 'alias', 'avatar', 'twitter',
		'facebook', 'website', 'github', 'location', 'interests', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}