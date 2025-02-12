<?php

use App\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    // dd($products);
    return view('welcome',[
        'products' => $products
    ]);
});
