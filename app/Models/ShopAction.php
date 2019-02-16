<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopAction extends Model
{
    public $table = 'shop_actions';
    public $fillable = [
        'id', 'shop_id', 'action_id', 'created_at', 'updated_at'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop', 'shop_id');
    }

    public function action()
    {
        return $this->belongsTo('App\Models\Action', 'action_id');
    }

    public static function exists($shop_id, $action_id)
    {
        $result = ShopAction::where(['shop_id' => $shop_id, 'action_id' => $action_id])->first();
        return (!$result) ? true : false;
    }
}
