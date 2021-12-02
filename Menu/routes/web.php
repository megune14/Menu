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
    return view('auth.login');
});

Route::get('/register',function () {
    return view('auth.register');
});
Route::get('/UserInput',function () {
    return view('html/user.UserInput');
});

Route::get('/Category',function () {
    return view('html/user.Category');
});

Route::get('/Category/{id}/Menu','MenuController@create',function () {
    return view('html/user.Menu');
})->name('detail');

Route::get('/UserInfo',function () {
    return view('html/user.UserInfo');
});

Route::get('/OrderList',function () {
    return view('html/user.OrderList');
});


Route::get('/RequestComplete',function () {
    return view('html/shop/RequestComplete');
});




Route::middleware(['verified'])->group(function(){

    Route::get('/RequestForm',function () {
        return view('html/shop.RequestForm');
    });


});

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
