<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    public $table = 'traffics';
    public $fillable = [
        'id', 'title', 'enabled', 'created_at', 'updated_at'
    ];

    public static function exists($title)
    {
        $result = Traffic::whereTitle($title)->first();
        return (!$result) ? true : false;
    }
}
