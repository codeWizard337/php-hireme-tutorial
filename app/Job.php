<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Job extends Model
{
    use SoftDeletes;

    protected $table = 'jobs';

    protected $fillable = [
        'position', 'qualification', 'description', 'address', 'city',
        'salary', 'contact', 'is_fulltime',
        'company_id',
    ];

    protected $casts = [
        'is_fulltime' => 'boolean',
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function applications() {
        return $this->hasMany(JobApplication::class, 'job_id', 'id')
            ->withTrashed();
    }

    public function user_status() {
        return $this->hasMany(JobApplication::class, 'job_id', 'id')
            ->where('user_id', Auth::id());
    }
}
