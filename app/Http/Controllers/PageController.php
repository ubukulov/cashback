<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function referral()
    {
        return view('referral-program');
    }
}
