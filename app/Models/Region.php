<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $fillable = [
        'id', 'title', 'created_at', 'updated_at'
    ];

    public static function exists($title)
    {
        $result = Region::whereTitle($title)->first();
        return (!$result) ? true : false;
    }
}
