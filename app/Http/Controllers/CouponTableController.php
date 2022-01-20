<?php

namespace App\Http\Controllers;

use App\Models\CouponTable;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// 現在認証しているユーザーを取得
$admin = Auth::user();
// 現在認証しているユーザーのIDを取得
$id = Auth::id();


class CouponTableController extends Controller
{
    //
    public function create(Request $request)
    {

        // 現在認証しているユーザーを取得
        $admin = Auth::user();
        // 現在認証しているユーザーのIDを取得
        $id = Auth::id();

      $coupon = new CouponTable;
      $form = $request->all();
      unset($form['token']);
      $form['StoreID'] = $id;
      $coupon->fill($form)->save();
      return redirect('/admin/CouponProduct');

    }
}
