<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetailTable;
use App\Models\OrderTable;
use App\Models\CommodityTable;
use App\Models\Point;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class VoucherController extends Controller
{
    public function view(){
        $orders = OrderTable::where('UserID',Auth::id())->where('Flag',0)->get();
        if($orders->isEmpty()){
            $order1=null;
            $commodity = null;
        }else{
        foreach ($orders as $order) {
            $allorder = OrderDetailTable::where('order_table_OrderID',$order->OrderID)->get();
            foreach ($allorder as $key) {
                $order1[] = $key;
            }
        }

        for ($i=0; $i < count($order1)-1; $i++) {
            for ($j=count($order1)-1; $i < $j; $j--) {
                if ($order1[$i]->CommodityID === $order1[$j]->CommodityID) {
                    $order1[$i]->Quantity = $order1[$i]->Quantity + $order1[$j]->Quantity;
                    unset($order1[$j]);
                    //$j--;
                    $order1 = array_values($order1);
                }
            }
        }
        $commodity = new CommodityTable;
    }
    return view('user/html.VoucherDetail',compact('order1','commodity'));
    }
    public function end(Request $request){
        $point = Point::where('StoreID',session()->get('StoreID'))->first();
        $userpoint = User::where('id',Auth::id())->first();
        $point = $userpoint->point + ($point->Point * floor($request->allprice /$point->Price));
        User::where('id',Auth::id())->update(['point'=>$point]);
        return redirect()->route('user.flagchenge');
    }

    public function flagchenge(){
        OrderTable::where('UserID',Auth::id())->update(['Flag'=>1]);
        //route要変更
        return redirect()->route('user.register');
    }
}
