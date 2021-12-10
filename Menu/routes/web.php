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

Route::get('/UserInfo',function () {
    return view('html/user.UserInfo');
});

Route::group(['OrderList'],function () {
Route::get('/OrderList',function () {
    return view('html/user.OrderList');
});
Route::get('/delete', 'OrderListController@delete');
Route::post('/delete', 'OrderListController@remove');
});


Route::get('/RequestComplete',function () {
    return view('html/shop/RequestComplete');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::middleware(['verified'])->group(function(){

    Route::get('/Category','CategoryController@create',function () {
        return view('html/user.Category');
    });

    Route::get('/Category/Menu?categoryid={categoryid}&shopid={shopid}','MenuController@create',function () {
        return view('html/user.Menu');
    })->name('detail');

    Route::get('/Category/{categoryid}/{shopid}/detail','MenuController@create',function () {
        return view('html/user.Menu');
    })->name('menudetail');

});
Route::get('/RequestForm',function () {
    return view('html/shop.RequestForm');
});

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/UserDelete',function () {
    return view('html/user.UserDelete');
});
Route::get('/StoreCouponList',function () {
    return view('html/shop.StoreCouponList');
});

Route::get('/CouponSetting',function () {
    return view('html/shop.CouponSetting');
});
Route::get('CouponSetting/add','CouponController@add');
Route::post('CouponSetting/add','CouponController@create');

Route::get('/PassChangeUserCheck',function () {
    return view('html/shop.PassChangeUserCheck');
});
Route::get('/PassChangeUserCheck',function () {
    return view('html/user.PassChangeUserCheck');
});


Route::get('/MenuDetail',function () {
    return view('html/shop.MenuDetail');
});

/* お試し用ルート */
Route::get('/a',function () {
    return view('html/shop.CouponSetting');
});

Route::get('MenuDetail/edit','MenuDetailController@edit' );
Route::post('MenuDetail/edit','MenuDetailController@update');
return view('html/shop.MenuDetail');

Route::get('/StoreInfoDelete',function () {
    return view('html/shop.StoreInfoDelete');
});


Route::get('/StoreInfoDetail', 'ShopsController@store',function(){
    return view('html/shop.StoreInfoDetail');
})->name('store');

Route::get('/StoreInfoSettings', 'ShopsController@setting',function () {
    return view('html/shop.StoreInfoSettings');
})->name('store');

Route::get('/UserRegister',function () {
    return view('html/user.UserRegister');
});

Route::get('/UserLogin',function () {
    return view('html/user.UserLogin');
});

Route::get('/MailChange',function () {
    return view('html/user.MailChange');
});

Route::get('/PassReSettingUserCheck',function () {
    return view('html/user.PassReSettingUserCheck');
});

Route::get('/Inquiry',function () {
    return view('html/user.Inquiry');
});
Route::get('/Category',function () {
    return view('html/user.Category');
});

Route::get('/',function () {
    return view('html/user.');
});

Route::get('/MailChange',function () {
    return view('html/shop.MailChange');
});

Route::get('/PassChangeCheck',function () {
    return view('html/user.PassChangeCheck');
});

Route::get('/MailChange',function () {
    return view('html/user.MailChange');
});



Route::get('MenuDetail/edit','MenuDetailController@edit' );
Route::post('MenuDetail/edit','MenuDetailController@update');
return view('html/shop.MenuDetail');
