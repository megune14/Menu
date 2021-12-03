<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class CategoryController extends Controller
{
    public function create(Request $request) {
        $id = $request->shopid;
        return view('html/user.Category', ['shopid' => $id]);
    }
}
