<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function create($id) {
        $item = Menu::find($id);
        return view('html/user.Menu', ['id' => $id]);
    }
}
