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

    /**
     * Additional function: auto publish accepted job on profile
     *
     * @param  int  $user_id
     * @return void
     */
    public function publish($user_id) {
        $detail = new UserDetail;
        $detail->type = 2;
        $detail->title = $this->job->position . ' at ' . $this->job->company->name;
        $detail->description = $this->job->description;
        $detail->user_id = $user_id;
        $detail->save();
    }
}
