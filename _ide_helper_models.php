<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Action
 *
 * @property int $id
 * @property string $title
 * @property string $type
 * @property string $payment_size
 * @property int $hold_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereHoldTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action wherePaymentSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Action whereUpdatedAt($value)
 */
	class Action extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Region
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Region whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Region whereUpdatedAt($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shop
 *
 * @property int $id
 * @property int $shop_id
 * @property string $title
 * @property string|null $image
 * @property string|null $status
 * @property float|null $rating
 * @property string|null $description
 * @property string|null $raw_description
 * @property string|null $site_url
 * @property int $exclusive
 * @property string|null $currency
 * @property float|null $cr
 * @property float|null $cr_trend
 * @property float|null $ecpc
 * @property float|null $ecpc_trend
 * @property float|null $epc
 * @property float|null $epc_trend
 * @property int|null $rate_of_approve
 * @property string|null $more_rules
 * @property int $geotargeting
 * @property int $coupon_iframe_denied
 * @property string|null $activation_date
 * @property string|null $modified_date
 * @property string|null $connected
 * @property int|null $avg_hold_time
 * @property int|null $avg_money_transfer_time
 * @property int $denynewwms
 * @property int|null $goto_cookie_lifetime
 * @property int $retag
 * @property int $show_products_links
 * @property string|null $landing_code
 * @property string|null $landing_title
 * @property string|null $action_type
 * @property string|null $individual_terms
 * @property int $allow_deeplink
 * @property int $allow_actions_all_countries
 * @property int|null $action_testing_limit
 * @property string|null $mobile_os_type
 * @property string|null $mobile_os
 * @property string|null $mobile_device_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereActionTestingLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereActionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereActivationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereAllowActionsAllCountries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereAllowDeeplink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereAvgHoldTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereAvgMoneyTransferTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereConnected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereCouponIframeDenied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereCr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereCrTrend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereDenynewwms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereEcpc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereEcpcTrend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereEpc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereEpcTrend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereExclusive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereGeotargeting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereGotoCookieLifetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereIndividualTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereLandingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereLandingTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereMobileDeviceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereMobileOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereMobileOsType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereModifiedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereMoreRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereRateOfApprove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereRawDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereRetag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereShowProductsLinks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereSiteUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereUpdatedAt($value)
 */
	class Shop extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopAction
 *
 * @property int $id
 * @property int $shop_id
 * @property int $action_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Action $action
 * @property-read \App\Models\Shop $shop
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction whereActionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopAction whereUpdatedAt($value)
 */
	class ShopAction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopCategory
 *
 * @property int $id
 * @property int $shop_id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Shop $shop
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopCategory whereUpdatedAt($value)
 */
	class ShopCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopRegion
 *
 * @property int $id
 * @property int $shop_id
 * @property int $region_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Region $region
 * @property-read \App\Models\Shop $shop
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopRegion whereUpdatedAt($value)
 */
	class ShopRegion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopTraffic
 *
 * @property int $id
 * @property int $shop_id
 * @property int $traffic_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic whereTrafficId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShopTraffic whereUpdatedAt($value)
 */
	class ShopTraffic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Traffic
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Traffic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Traffic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Traffic query()
 */
	class Traffic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

