<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyUser extends Model
{
    use SoftDeletes;

    protected $table = 'company_users';

    protected $fillable = [
        'company_id', 'user_id',
    ];
}
