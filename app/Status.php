<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = [
        'name',
    ];

    public static function pending() {
        return DB::table('status')->where('name', 'pending')->first()->id;
    }

    public static function accepted() {
        return DB::table('status')->where('name', 'accepted')->first()->id;
    }

    public static function rejected() {
        return DB::table('status')->where('name', 'rejected')->first()->id;
    }

    public static function is_published() {
        return DB::table('status')->where('name', 'published')->first()->id;
    }

    public static function is_deleted() {
        return DB::table('status')->where('name', 'deleted')->first()->id;
    }
}
