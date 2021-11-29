<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function create($id) {
        return view('html.Menu', ['id' => $id]);
    }
}
