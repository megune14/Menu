<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetailTable;
use App\Models\OrderTable;
use Illuminate\Support\Facades\Auth;
use App\Models\CommodityTable;
use App\Models\Order;
use App\Models\User;
class OrderHistoryController extends Controller
{
    public function view(){
        dd(Auth::guard('admin')->id());
        $orders = OrderTable::where('StoreID',Auth::id())->where('Flag',1)->get();
        return view('admin/html.OrderHistory',compact('orders'));
    }
    public function detail($detail){
        $orders = OrderDetailTable::where('order_table_OrderID',$detail)->get();
        foreach ($orders as $key) {
            $order1[] = $key;
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
        foreach ($order1 as $order) {
            $order['Commodity'] = CommodityTable::where('CommodityID',$order->CommodityID)->first();
        }
        return view('admin/html.OrderHistoryDetail',compact('order1'));
    }
}
