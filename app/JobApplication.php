<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{
    use SoftDeletes;

    protected $table = 'job_applications';

    protected $fillable = [
        'user_id', 'job_id', 'status_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function job() {
        return $this->belongsTo(Job::class)->withTrashed();
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
}
