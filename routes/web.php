<?php

use App\Page;
use App\Block;
use App\BlockPage;
use App\Layout;
use App\PageBlock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test' , function(){
    dd(Block::pluck('slug'));

    
    
});
Route::namespace('Pages')->group(function () {
    Route::get('/', 'HomePageController@index')->name('home.index');

    //shop routs
    Route::prefix('shop')->group(function () {
        Route::get('/', 'ShopPageController@index')->name('shop.index');
        Route::get('/show', 'ShopPageController@show')->name('shop.show');
    });
    
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
