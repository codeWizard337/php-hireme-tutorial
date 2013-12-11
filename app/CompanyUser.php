<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyUser extends Model
{
    protected $table = 'company_users';

    public $timestamps = false;

    protected $fillable = [
        'company_id', 'user_id',
    ];
}
