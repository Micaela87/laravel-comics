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
    $productsData = config('data.productsData');
    return view('pages.home', compact('productsData'));
})->name('home');

Route::get('single/{id}', function ($id) {
    $productsData = config('data.productsData');
    $singleProduct = '';
    foreach ($productsData as $product) {
        if ($product["id"] === $id) {
            $singleProduct = $product;
        }
    }
    return view('pages.single', compact('singleProduct'));
})->name('single');
