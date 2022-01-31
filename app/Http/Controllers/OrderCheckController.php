<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetailTable;
use App\Models\OrderTable;
use Illuminate\Support\Facades\Auth;
use App\Models\CommodityTable;
use App\Models\User;
class OrderCheckController extends Controller
{
    public function view(){
        $allorder = OrderTable::where('StoreID',Auth::id())->get();
        foreach ($allorder as $order) {
            $details = OrderDetailTable::where('order_table_OrderID',$order->OrderID)->get();
            foreach ($details as $detail) {
                $commodity = CommodityTable::where('CommodityID',$detail->CommodityID)->first();
                $detail['CommodityName'] = $commodity->CommodityName;
                $detail['TableNumber'] = $order->TableNumber;
                $allorderdetail[] = $detail;
            }
            //$allorderdetail['CommodityName'] = CommodityTable::where('CommodityID',$order->CommodityID)->first();
        }
        $commodity = CommodityTable::get();
        return view('admin.html/OrderCheck',compact('allorderdetail'));
}
}
