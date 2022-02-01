<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CouponTable;
use App\Models\CommodityTable;
use App\Models\User;
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
      //dd($form);
      $coupon->fill($form)->save();
      return redirect('/admin/CouponProduct');

    }

    public function open()
    {
      
      $coupon = CouponTable::where('StoreID',Auth::id())->get();
    $menu = CommodityTable::where('StoreID',Auth::id())->get();
    
    $i = 0;
   
    if (is_array($coupon) && empty($coupon)) {
    }else{
    foreach ($coupon as $key) {
      $key['CommodityName'] = $menu->where('CommodityID',$key['CommodityID'])->first()->CommodityName;
      $key['img'] = $menu->where('CommodityID',$key['CommodityID'])->first()->img;
      $coupon[$i] = $key;
      $i++;
    }
  }
    
    
   //dd($coupon[0]['img']);
    return view('admin/html.StoreCouponList',['coupon'=>$coupon]);
    }



    public function CouponOpen()
    {

      session()->has('StoreID');
      $coupon = CouponTable::where('StoreID',Auth::id())->get();
      $menu = CommodityTable::where('StoreID',Auth::id())->get();
      
      $user = User::where('id',Auth::id())->get();
     

    $i = 0;
   
    if (is_array($coupon) && empty($coupon)) {
    }else{
    foreach ($coupon as $key) {
      $key['CommodityName'] = $menu->where('CommodityID',$key['CommodityID'])->first()->CommodityName;
      $key['img'] = $menu->where('CommodityID',$key['CommodityID'])->first()->img;
      $coupon[$i] = $key;
      $i++;
    }
    
  }
  foreach ($user as $user) {   
  }
    
    
   //dd($coupon[0]['img']);
    return view('user/html.CouponList',['coupon'=>$coupon,'user'=>$user]);
    }




    
    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = User::where('id',Auth::id())->update([
          'point' => $request-> point
        ]);
        return redirect('/cart');
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            
            'point' => $request->point,
           


        ];
        DB::update('update users set point = :point where id = :id', $param);
        return redirect('/CouponList');
    }
}
