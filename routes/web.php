<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::namespace('App\Http\Controllers')->middleware('auth')->group(function(){

    Route::resource('/products', 'ProductsController');
    Route::resource('/publishedby', 'UserProducts', ['except'=>['show','create','store', 'update', 'edit', 'destroy']]);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
