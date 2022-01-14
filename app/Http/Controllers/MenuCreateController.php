<?php

namespace App\Http\Controllers;
use App\Models\CommodityTable;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuCreateController extends Controller
{
    public function create(Request $request) {
        if ($request->FORM_NAME == 0) {
            $items = CommodityTable::get();
        }else{
            $items = CommodityTable::where('CategoryID',$request->FORM_NAME)->get();
        }
        return view('admin/html.MenuCreate',['Menu'=>$items]);
    }
}
