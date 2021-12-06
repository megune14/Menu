<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function create($categoryid,$shopid) {
        return view('html/user.Menu', ['categoryid' => $categoryid], ['shopid' => $shopid]);
    }
}
