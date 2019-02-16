<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopRegion extends Model
{
    public $table = 'shop_regions';
    public $fillable = [
        'id', 'shop_id', 'region_id', 'created_at', 'updated_at'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop', 'shop_id');
    }

    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'region_id');
    }

    public static function exists($shop_id, $region_id)
    {
        $result = ShopRegion::where(['shop_id' => $shop_id, 'region_id' => $region_id])->first();
        return (!$result) ? true : false;
    }
}
