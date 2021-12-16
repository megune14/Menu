<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderList;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Validator;
//use Illuminate\Database\Eloquent\SoftDeletes;

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
      $order = new Order;
      $form = $request->all();
      unset($form['token']);
      $order->fill($form)->save();
      return redirect('/OrderList');

    }

    public function delete(Request $request)
   {
       $order = OrderList::find($request->id);
       return view('OrderList.del',['form => $order']);
/////
   }

   public function remove(Request $request)
    {
        OrderList::find(2)->delete();
        return redirect('/OrderList');
    }



  // public function softDeletes($column = 'deleted_at', $precision = 0)
  //{
  //     return $this->timestamp($column, $precision)->nullable();
  // }


};
