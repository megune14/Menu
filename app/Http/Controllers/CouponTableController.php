<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CouponTable;
use App\Models\CommodityTable;
//use App\Models\CouponTable;
//use App\Models\CommodityTable;

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

    public function open()
    {

      $coupon = CouponTable::where('StoreID',Auth::id())->get();
    $menu = CommodityTable::where('StoreID',Auth::id())->get();

    $i = 0;



    foreach ($coupon as $key) {
      $key['CommodityName'] = $menu[$i]->CommodityName;
      $key['img'] = $menu[$i]->img;
      $coupon[$i] = $key;
      $i++;



    }

   dd($coupon);
    return view('admin/html.StoreCouponList',['coupon'=>$coupon]);
    }
}
