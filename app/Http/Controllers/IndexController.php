<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome()
    {
        $offers = Shop::all();
        return view('welcome', compact('offers'));
    }

    public function catalog($shop_id)
    {
        $shop = Shop::find($shop_id);
        if (!$shop) {
            abort(404);
        }
        return view('catalog', compact('shop'));
    }
}
