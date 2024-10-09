<?php

use App\Livewire\CreateProducts;
use App\Livewire\Products;
use App\Livewire\UpdateProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',Products::class);
Route::get('/product/create',CreateProducts::class);
Route::get('/product/update/{id}',UpdateProduct::class);