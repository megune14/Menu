<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function create(Request $request,$id) {
        $shopid = $request->shopid;
        return view('html/user.Menu', ['menuid' => $id], ['shopid' => $shopid]);
    }
}
