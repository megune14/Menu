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
        $Flag0=false;
        $Flag1=false;
        $allorder = OrderTable::where('StoreID',Auth::id())->where('Flag',0)->get();
        if(isset($allorder)){
            return view('admin.html/OrderCheck');
        }
        foreach ($allorder as $order) {
            $details = OrderDetailTable::where('order_table_OrderID',$order->OrderID)->get();
            foreach ($details as $detail) {
                $commodity = CommodityTable::where('CommodityID',$detail->CommodityID)->first();
                $detail['CommodityName'] = $commodity->CommodityName;
                $detail['TableNumber'] = $order->TableNumber;
                if($detail->Flag === 0){
                    $detail0[] = $detail;
                    $Flag0 = true;
                }else {
                    $detail1[] = $detail;
                    $Flag1 = true;
                }
            }
            //$allorderdetail['CommodityName'] = CommodityTable::where('CommodityID',$order->CommodityID)->first();
        }
        $commodity = CommodityTable::get();
        if($Flag0===false && $Flag1===true ){
            return view('admin.html/OrderCheck',compact('detail1'));
        }elseif($Flag0===true && $Flag1===false ){
            return view('admin.html/OrderCheck',compact('detail0'));
        }elseif($Flag0===false && $Flag1===false ){
            return view('admin.html/OrderCheck');
        }else{
            return view('admin.html/OrderCheck',compact('detail0','detail1'));
        }
    }
    public function updata(Request $request){
        $order = OrderDetailTable::where('OrderDetailID',$request->id)->update([
            'Flag' => $request->flag
        ]);

        return redirect()->route('admin.view');
    }
}
