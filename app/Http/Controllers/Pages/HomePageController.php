<?php

namespace App\Http\Controllers\Pages;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index()
    {
        $home = Page::where('slug' , 'home.blade.php')->first();
        $blocks = $home->blocks;
        $banners = ['baneer'];
        return view('pages.home' , compact(['blocks' , 'banners']));
    }
}
