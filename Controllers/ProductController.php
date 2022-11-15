<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $price = 0.0;
        return view('index', [
            'title' => 'Home', 'icon' => 'assets/farm.png'
        ], compact('price'));
    }

    public function products(){
        $price = 0.0;
        return view('products', [
            'title' => 'Products', 'icon' => 'assets/farm.png'
        ], compact('price'));  
    }

    public function about(){
        return view('about-us', [
            'title' => 'About Us', 'icon' => 'assets/farm.png'
        ]);
    }
}
