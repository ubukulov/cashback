<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    public $fillable = [
        'id', 'shop_id', 'title', 'type', 'payment_size', 'hold_time', 'created_at', 'updated_at'
    ];

    public static function exists($shop_id, $type)
    {
        $result = Action::where(['shop_id' => $shop_id, 'type' => $type])->first();
        return (!$result) ? true : false;
    }

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop', "shop_id");
    }
}
