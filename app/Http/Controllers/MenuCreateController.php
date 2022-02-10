<?php

namespace App\Http\Controllers;
use App\Models\CommodityTable;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MenuCreateController extends Controller
{
    public function create(Request $request) {
        if ($request->FORM_NAME == 0) {
            $items = CommodityTable::get()->where('StoreID',Auth::id());
        }else{
            $items = CommodityTable::where('CategoryID',$request->FORM_NAME)->where('StoreID',Auth::id())->get();
        }
        return view('admin/html.MenuCreate',['Menu'=>$items]);
    }

    public function delete(Request $request) {

   
        CommodityTable::where('CommodityID',$request->id)->delete();
        return redirect('/admin/MenuCreate');
        /**return view('StoreCouponList.del',['form => $coupon']); */
    }


    public function stop(Request $request){
        CommodityTable::where('CommodityID',$request->id)->update([
            'StopFlag' => 1
        ]);

    }
}
