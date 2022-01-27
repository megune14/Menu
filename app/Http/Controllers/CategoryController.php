<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;
class CategoryController extends Controller
{
    public function create(Request $request) {
        if(session()->has('StoreID')){

            return view('user/html.Category');
        }else{
        $shopid = $request->shopid;
        session(['StoreID'=>$shopid]);
        return view('user/html.Category');
        }
    }
}
