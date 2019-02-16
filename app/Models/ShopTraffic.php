<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopTraffic extends Model
{
    public $table = 'shop_traffics';
    public $fillable = [
        'id', 'shop_id', 'traffic_id', 'created_at', 'updated_at'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop', 'shop_id');
    }

    public function traffic()
    {
        return $this->belongsTo('App\Models\Traffic', 'traffic_id');
    }

    public static function exists($shop_id, $traffic_id)
    {
        $result = ShopTraffic::where(['shop_id' => $shop_id, 'traffic_id' => $traffic_id])->first();
        return (!$result) ? true : false;
    }
}
