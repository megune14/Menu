<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuCreateController extends Controller
{
    public function create(Request $request) {
        $items = Menu::get();
        return view('html/shop.MenuCreate',['Menu'=>$items]);
    }
}
