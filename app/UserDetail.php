<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';

    protected $fillable = [
        'title', 'description',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
