<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    //
    public function index()
    {
        return view('pages.shop');
    }


    public function show()
    {
        return view('pages.product');
    }
}
