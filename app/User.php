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
    protected $fillable = [
        'name', 'email', 'password',
        'address', 'gender', 'dob',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function details() {
        return $this->hasMany(UserDetails::class, 'user_id', 'id');
    }

    public function applicants() {
        return $this->hasMany(JobApplication::class, 'user_id', 'id');
    }

    public function companies() {
        return $this->hasMany(CompanyUser::class, 'user_id', 'id');
    }
}
