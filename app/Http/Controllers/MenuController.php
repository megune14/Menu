<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function create(Request $request) {
        $categoryid = $request->categoryid;
        $shopid = session()->get('StoreID');
        return view('user/html.Menu', ['categoryid' => $categoryid], ['shopid' => $shopid]);
    }
}
