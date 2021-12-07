<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderListController extends Controller
{
    //

 public function store(Requestt $request){
     $data = $request->all();
     
    
    return view('html/user.OrderList', $data);
 }


 

    
}
