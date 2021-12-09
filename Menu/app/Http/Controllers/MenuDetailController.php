<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuDetailController extends Controller
{
    public function edit(Request $request)
{
    $param = ['id' => $request->id];
    $item = DB::select('select *  from _menu_detail where id = :id',$param);
    return view('MenuDetail.edit',['form' => $item[0]]);
}

public function update(Request $request)
{
    $param = [
        'id' => $request->id,
        'name' => $request->name,
        'price' => $request->price,
        

    ];
    DB::update('update _menu_detail set name = :name, price = :price where id = :id', $param);
    return redirect('/MenuDetail');
}


    //
}
