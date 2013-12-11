<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $table = 'companies';

    protected $fillable = [
        'name', 'logo',
    ];

    public function jobs() {
        return $this->hasMany(Job::class, 'company_id', 'id');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'company_users');
    }
}
