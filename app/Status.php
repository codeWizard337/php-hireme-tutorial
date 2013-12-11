<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public static function pending() {
        return self::where('name', 'pending')->first()->id;
    }

    public static function accepted() {
        return self::where('name', 'accepted')->first()->id;
    }

    public static function rejected() {
        return self::where('name', 'rejected')->first()->id;
    }

    public static function is_published() {
        return self::where('name', 'published')->first()->id;
    }

    public static function is_deleted() {
        return self::where('name', 'deleted')->first()->id;
    }
}
