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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin','middleware' => 'auth:admin'], function () {
    Route::get('/Inquiry',[InquiryController::class, 'create'],function () {
        return view('admin/html.Inquiry');
    });
             });
Route::get('/UserDelete',function () {
    return view('user/html.UserDelete');
});

Route::get('/VoucherDetail',function () {
    return view('html/user.VoucherDetail');
});
