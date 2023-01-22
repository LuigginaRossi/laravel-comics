<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
     $posterComics= config('tempDB');
     $shopList= config('shopList');
     $footerList= config('footerList');
     $navbar= config('navbar');
     $secondFooter= config('secondFooter');
    return view('index', [
        "posterComics" =>$posterComics,
        "shopList"=>$shopList,
        "footerList"=>$footerList,
        "navbar"=>$navbar,
        "secondFooter"=>$secondFooter,
    ]);
})->name('home');

Route::get('/games', function () {
    $posterComics= config('tempDB');
    $shopList= config('shopList');
    $footerList= config('footerList');
    $navbar= config('navbar');
    $secondFooter= config('secondFooter');
   return view('games', [
       "posterComics" =>$posterComics,
       "shopList"=>$shopList,
       "footerList"=>$footerList,
       "navbar"=>$navbar,
       "secondFooter"=>$secondFooter,
   ]);
})->name('games');