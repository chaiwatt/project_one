<?php

use App\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    return view('welcome',[
        'products' => $products
    ]);
});

Route::get('view/{id}', 'ProductController@view')->name('view.product');