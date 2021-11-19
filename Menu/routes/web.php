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

Route::get('/',function () {
    return view('html.UserLogin');
});

Route::get('/UserInput',function () {
    return view('html.UserInput');
});

Route::get('/Category',function () {
    return view('html.Category');
});

Route::get('/Category/Menu',function () {
    return view('html.Menu');
});
