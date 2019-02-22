<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    public $table = 'traffics';
    public $fillable = [
        'id', 'shop_id', 'title', 'enabled', 'created_at', 'updated_at'
    ];

    public static function exists($shop_id, $title)
    {
        $result = Traffic::where(['shop_id' => $shop_id, 'title' => $title])->first();
        return (!$result) ? true : false;
    }
}
