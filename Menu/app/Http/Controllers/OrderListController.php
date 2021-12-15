<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderList;
use Illuminate\Support\Facades\DB;

class OrderListController extends Controller
{
    //
    public function index(Request $request){
        $items = DB::select ('select * from order');
        return view('OrderList.index',['items => $items']);

    }

    public function post(Request $request){
        $items = DB::select ('select * from order');
        return view('OrderList.index',['items => $items']);
    }


     public function add(Request $request)
    {

        return view('OrderList.add');
    }

    public function create(Request $request)
    {

        //$param = [
        //    'name' => $request->name,
        //    'point' => $request->point,
        //];
        //DB::insert('insert into coupon(name, point) values (:name, :point)',$param);
        //return redirect('/CouponSetting');
      //$this->validate($request,Coupon::$rules);
      $order = new order;
      $form = $request->all();
      unset($form['token']);
      $order->fill($form)->save();
      return redirect('/OrderList');

    }


};
