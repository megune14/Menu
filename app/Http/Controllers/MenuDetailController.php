<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CommodityTable;
use App\Models\CategoryTable;
class MenuDetailController extends Controller
{
    public function view(Request $request)
{
    $item = CommodityTable::where('CommodityID',$request->id)->first();
    $category = CategoryTable::where('CategoryID',$item->CategoryID)->first();
    return view('admin/html.MenuDetail',['commodity' => $item,'category'=>$category]);
}

public function update(Request $request)
{

    CommodityTable::where('CommodityID',$request->id)->first()->update([
        'CommodityName' => $request->name,
        'Price' => $request->price,
        'Allergy' => $request->allergy,
        'Calory' => $request->calory,
    ]);
    return redirect()->route('admin.menudetail',['id'=>$request->id]);
}


    //
}
