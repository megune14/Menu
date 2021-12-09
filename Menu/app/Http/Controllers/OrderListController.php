<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

 //public function store(Request $request) {
 //   $date = $request->id;
 //   return view('html/user.OrderList', ['id' => $date]);
//
//}

public function delete(Request $request)
    {
        $user = \Auth::user();
        $param = ['id' => $request->id];
        $item = DB::select('select * from order_lists where id = :id',$param);
        return view('html/user.OrderList.delete',['form' => $item[1]]);
        //$inputs = $request->all();
        // dd($inputs);
        // 論理削除なので、status=2
       // Memo::where('id', $id)->update([ 'status' => 2 ]);
        // ↓は物理削除
        // Memo::where('id', $id)->delete();

        //return view('html/user.OrderList');
    }

public function remove(Request $request)
{
    $param = ['id' => $request->id];
    DB::delete('delete from order_lists where id = :id',$param);
    return redirect('/OrderList');
}


};
