<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

  public function setting() {
    $md = new User();
    $data = $md->where('id',Auth::id())->first();
    return view('user/html.ConfirmRegisterDetail',['data' => $data]);
  }
    public function delete(Request $request) {
    User::find(Auth::id())->delete();
    return redirect('admin/login');
  }
  public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select *  from users where id = :id',$param);
        return view('MailChange.edit',['form' => $item[0]]);
    }
  public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'email' => $request->email,
        ];
        DB::update('update users set emali = :email where id = :id', $param);
        return redirect('/MailChangeCheck');
    }
  
}