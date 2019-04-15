<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function welcome()
    {
        $offers = Shop::whereStatus('active')->where('gotolink', '!=', null)->limit(16)->get();
        return view('index', compact('offers'));
    }
}
