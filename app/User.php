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
        'address', 'gender', 'date_of_birth',
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

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function details() {
        return $this->hasMany(UserDetail::class, 'user_id', 'id');
    }

    public function applications() {
        return $this->hasMany(JobApplication::class, 'user_id', 'id')->withTrashed();
    }

    public function companies() {
        return $this->belongsToMany(Company::class, 'company_users');
    }
}
