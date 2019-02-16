<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    public $fillable = [
        'id', 'title', 'type', 'payment_size', 'hold_time', 'created_at', 'updated_at'
    ];

    public static function exists($type)
    {
        $result = Action::whereType($type)->first();
        return (!$result) ? true : false;
    }
}
