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
    $price = 0.0;
    return view('index', [
        'title' => 'Home', 'icon' => 'assets/farm.png'
    ], compact('price'));
});

Route::get('/products', function () {
    $price = 0.0;
    return view('products', [
        'title' => 'Products', 'icon' => 'assets/farm.png'
    ], compact('price'));
});

Route::get('/about-us', function () {
    return view('about-us', [
        'title' => 'About Us', 'icon' => 'assets/farm.png'
    ]);
});
