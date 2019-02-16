<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    public $table = 'shop_categories';
    public $fillable = [
        'id', 'shop_id', 'category_id', 'created_at', 'updated_at'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop', 'shop_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public static function exists($shop_id, $category_id)
    {
        $result = ShopCategory::where(['shop_id' => $shop_id, 'category_id' => $category_id])->first();
        return (!$result) ? true : false;
    }
}
