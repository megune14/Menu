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
    });

    Route::get('/Category/Menu','MenuController@create',function () {
        return view('user/html.Menu');
    })->name('detail');
});
Route::get('/OrderList',function () {
    return view('user/html.OrderList');
});
Route::get('/VoucherDetail',function () {
    return view('user/html.VoucherDetail');
});
Route::post('/OrderList/add','OrderListController@twoButtonsResult');

