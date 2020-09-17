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

Route::get('/Page', function () {
    return view('Page');
});
Route::get('/Features', function () {
    return view('Features');
});
Route::get('/Contact', function () {
    return view('Contact');
});