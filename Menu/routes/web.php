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

/* お試し用ルート */
Route::get('/a',function () {
    return view('html/user.ConfirmRegisterDetail');
});

/* お試し用ルートその2 */
Route::get('/b',function () {
    return view('html/user.MailChange');
});

/* お試し用ルートその2 */
Route::get('/c',function () {
    return view('html/user.PassReSetting');
});

/* お試し用ルートその2 */
Route::get('/d',function () {
    return view('html/user.PassReSettingUserCheck');
});

Route::get('/UserInput',function () {
    return view('html/user.UserInput');
});

Route::get('/UserInfo',function () {
    return view('html/user.UserInfo');
});


Route::get('/OrderList',function () {
    return view('html/user.OrderList');
});
Route::get('/OrderList/add','OrderList@add');
Route::post('/OrderList/add','OrderList@create');



Route::get('/RequestComplete',function () {
    return view('html/shop/RequestComplete');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::middleware(['verified'])->group(function(){

    Route::get('/Category','CategoryController@create',function () {
        return view('html/user.Category');
    });

    Route::get('/Category/Menu','MenuController@create',function () {
        return view('html/user.Menu');
    })->name('detail');



});


Route::get('/RequestForm',function () {
    return view('html/shop.RequestForm');
});

Route::get('/MenuCreate','MenuCreateController@create',function () {
    return view('html/shop.MenuCreate');
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
Route::get('/StoreCouponList/del','CouponController@del');
Route::post('/StoreCouponList/del','CouponController@remove');

Route::get('/CouponSetting',function () {
    return view('html/shop.CouponSetting');
});
Route::get('/CouponSetting/add','CouponController@add');
Route::post('/CouponSetting/add','CouponController@create');

Route::get('/PassChangeUserCheck',function () {
    return view('html/shop.PassChangeUserCheck');
});
Route::get('/PassChangeUserCheck',function () {
    return view('html/user.PassChangeUserCheck');
});


Route::get('/MenuDetail',function () {
    return view('html/shop.MenuDetail');
});



Route::get('/StoreInfoDelete',function () {
    return view('html/shop.StoreInfoDelete');
});


Route::get('/StoreInfoDetail', 'ShopsController@store',function(){
    return view('html/shop.StoreInfoDetail');
})->name('store');



Route::get('/MailChange',function () {
    return view('html/shop.MailChange');
});

Route::get('/PassChangeCheck',function () {
    return view('html/user.PassChangeCheck');
});

Route::get('/MailChange',function () {
    return view('html/user.MailChange');
});


Route::get('/StoreInfoDelete',function () {
    return view('html/shop.StoreInfoDelete');
});



Route::get('/StoreInfoSettings', 'ShopsController@setting',function () {
    return view('html/shop.StoreInfoSettings');
})->name('setting');

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

Route::get('/Request/add','Request@add');
Route::post('/Request/add','Request@create');

Route::get('MenuDetail/edit','MenuDetailController@edit' );
Route::post('MenuDetail/edit','MenuDetailController@update');
return view('html/shop.MenuDetail');
