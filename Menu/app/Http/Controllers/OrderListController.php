<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderListController extends Controller
{
    //

// public function store(Request $request){
//     $data = $request->all();
//
     //$project = OrderList::create([
     // 'name' =>  $data['name'],
     // 'description' => $data['description']
     //]);
     
    
 //   return view('html/user.OrderList');

 public function store(Request $request) {
    $date = $request->id;
    return view('html/user.OrderList', ['id' => $date]);

}


};
