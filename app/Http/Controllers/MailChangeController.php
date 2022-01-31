<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MailChangeController extends Controller
{
    //

    public function MailCheck() {
        $md = new Admin();
        $data = $md->where('id',Auth::id())->first();
        return view('admin/html.MailChange',['data' => $data]);
  }

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select *  from admins where id = :id',$param);
        return view('MailChange.edit',['form' => $item[0]]);
    }
  public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'email' => $request->email,
        ];
        DB::update('update admins set email = :email where id = :id', $param);
        return redirect('admin/MenuCreate');
    }
}
