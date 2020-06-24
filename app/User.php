<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use HasApiTokens, Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','userstat','usersdat','useredat','userprof','userdesc',
    ];

    protected $hidden = [
	'password', 'remember_token',
	];

	public function paramd()
    {
    	return $this->hasOne('App\paramd');
    }
}
