<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends BaseController
{
    public function shops()
    {
        $offers = Shop::whereStatus('active')->paginate(12);
        return view('shops', compact('offers'));
    }

    public function show($shop_id)
    {
        $shop = Shop::find($shop_id);
        if (!$shop) {
            abort(404);
        }
        return view('shop', compact('shop'));
    }
}
