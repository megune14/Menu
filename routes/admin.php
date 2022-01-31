<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\InquiryController;
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
    return view('admin/auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('dashboard');

//完成したページのルートはグループに含める
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/Inquiry',[InquiryController::class, 'create'],function () {
        return view('admin/html.Inquiry');
    });
             });



Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth:admin')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth:admin', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth:admin', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth:admin')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth:admin');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth:admin')
                ->name('logout');

Route::get('/StoreCouponList','CouponTableController@open',function () {
    return view('admin/html.StoreCouponList');
});
//Route::get('/StoreCouponList/del','CouponController@delete');
//Route::post('/StoreCouponList/del','CouponController@remove');
//Route::get('/StoreCouponList','CouponTableController@open');

Route::get('/MenuDetail',function () {
    return view('admin/html.MenuDetail');
});

Route::get('MenuDetail/edit','MenuDetailController@edit' );
Route::post('MenuDetail/edit','MenuDetailController@update');

Route::get('/CouponSetting',function () {
    return view('admin/html.CouponSetting');
});
Route::get('CouponSetting/edit','CouponController@edit' );
Route::post('CouponSetting/edit','CouponController@update');


Route::get('/NewProduct',function () {
    return view('admin/html.NewProduct');
});
Route::post('/NewProduct/add','CommodityTableController@create');


Route::get('/StoreCouponList/del','CouponController@detail');
Route::post('/StoreCouponList/del','CouponController@remove');

Route::get('/RequestForm',function () {
    return view('admin/html.RequestForm');
});
Route::post('/RequestForm/add','RequestController@create');

Route::get('/MenuCreate','MenuCreateController@create',function () {
    return view('admin/html.MenuCreate');
});
Route::post('/MenuCreate','MenuCreateController@create');

Route::get('/CouponProduct',function () {
    return view('admin/html.CouponProduct');
});

Route::post('/CouponProduct/add','CouponTableController@create');

Route::get('/Inquiry',function () {
    return view('admin/html.inquiry');
});
Route::post('/Inquiry/add','InquiryController@create');


Route::match(['post','get'],'/MenuCreate','MenuCreateController@create',function () {
    return view('admin/html.MenuCreate');
});

Route::get('/StoreInfoSettings', 'ShopsController@setting',function () {
    return view('admin/html.StoreInfoSettings');
})->name('setting');

Route::post('/StoreInfoSettings/edit','ShopsController@edit');
Route::post('/StoreInfoSettings/edit','ShopsController@update');

Route::get('/PointSetting','PointController@setting',function () {
    return view('admin/html.PointSetting');
});

Route::post('PointSetting/add','PointController@create');

Route::get('PointSetting/add','PointController@edit');
Route::post('PointSetting/add','PointController@update');

Route::get('/StoreInfoDetail', 'ShopsController@store',function () {
    return view('admin/html.StoreInfoDetail');
})->name('setting');

Route::post('/StoreInfoDetail/add','ShopsController@');

Route::get('/StoreInfoDelete',function () {
    return view('admin/html.StoreInfoDelete');
})->name('setting');

Route::post('/StoreInfoDelete/delete','ShopsController@delete');

Route::get('/CouponDetail','CouponTableController@open',function () {
    return view('admin/html.CouponDetail');
})->name('setting');


Route::post('/CouponDetail','CouponController@detail');
Route::post('/CouponDetail/delete','CouponController@delete');

Route::get('/RequestComplete',function () {
    return view('admin/html.RequestComplete');
});
Route::get('/OrderCheck','OrderCheckController@view')->name('view');
Route::post('/OrderCheck/chenge','OrderCheckController@updata')->name('update');

Route::get('/MailChange','MailChangeController@MailCheck',function () {
    return view('admin/html.MailChange');
});

Route::get('/MailChange/edit','MailChangeController@edit');
Route::post('/MailChange/edit','MailChangeController@update');

