<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('user/auth.login');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['middleware' => 'auth:users'], function () {
    Route::get('/Category','CategoryController@create',function () {
        return view('user/html.Category');
    })->name('category');

    Route::get('/Category/Menu','MenuController@create',function () {
        return view('user/html.Menu');
    })->name('detail');

    Route::get('/Category/Menu/{detail}','MenuController@detail',function () {
        return view('user/html.MenuDetail');
    })->name('menudetail');
});

Route::get('/VoucherDetail',function () {
    return view('user/html.VoucherDetail');
});


Route::get('/FoodDetail',function () {
    return view('user/html.FoodDetail');
});

Route::get('/UserDelete',function () {
    return view('user/html.UserDelete');
});
Route::post('/UserDelete/delete','UserController@delete');


Route::get('/ConfirmRegisterDetail','UserController@setting',function () {
    return view('user/html.ConfirmRegisterDetail');
});

Route::prefix('cart')->middleware('auth:users')->group(function(){
    Route::get('/','CartController@index')->name('cart.index');
    Route::post('/add','CartController@add')->name('cart.add');
    Route::post('/delete/{item}','CartController@delete')->name('cart.delete');
    Route::post('/push','CartController@push')->name('cart.push');

});

