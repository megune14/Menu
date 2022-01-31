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
    User::where('id',Auth::id())->delete();
    return redirect('/login');
  }
}
  