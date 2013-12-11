<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    protected $table = 'companies';

    protected $fillable = [
        'position', 'qualification', 'description',
        'location', 'salary', 'contact',
        'company_id',
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function applicants() {
        return $this->hasMany(JobApplication::class, 'job_id', 'id');
    }
}
