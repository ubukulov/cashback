<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $fillable = [
        'id', 'shop_id', 'title', 'image', 'status', 'rating', 'description',
        'raw_description', 'site_url', 'exclusive', 'currency', 'cr', 'cr_trend',
        'ecpc', 'ecpc_trend', 'epc', 'epc_trend', 'rate_of_approve', 'more_rules',
        'geotargeting', 'coupon_iframe_denied', 'activation_date', 'modified_date',
        'connected', 'avg_hold_time', 'avg_money_tranfer_time', 'denynewwms',
        'goto_cookie_lifetime', 'retag', 'show_products_links', 'landing_code',
        'landing_title', 'action_type', 'individual_terms', 'allow_deeplink',
        'allow_actions_all_countries', 'action_testing_limit', 'mobile_os_type',
        'mobile_os', 'mobile_device_type', 'created_at', 'updated_at'
    ];

    public static function exists($shop_id)
    {
        $result = Shop::whereShopId($shop_id)->first();
        return (!$result) ? true : false;
    }
}
