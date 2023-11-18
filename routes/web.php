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
    $products = config('Products');
    return view('home',compact ('products'));
})->name('home');
Route::get('/uomo', function () {
    $products = config('Products');
    return view('uomo',compact ('products'));
})->name('uomo');
Route::get('/donna', function () {
    $products = config('Products');
    return view('donna',compact ('products'));
})->name('donna');
Route::get('/bambini', function () {
    $products = config('Products');
    return view('bambini',compact ('products'));
})->name('bambini');
Route::get('/Informazioni-legali', function () {
    return view('legal');
})->name('legal');
Route::get('/Informativa-sulla-privacy', function () {
    return view('privacy');
})->name('privacy');
Route::get('/diritto-di-ricesso', function () {
    return view('ricesso');
})->name('ricesso');

