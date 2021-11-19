<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function create(Request $request) {
        $param = [
            'mail' => $request->mail, //取得したいデータをinput要素のname属性
            'remail' => $request->remail,

        ];
        //DBに接続しデータを挿入する。第１パラメータにSQL文、第２に$paramを。
        DB::insert('insert into reviews (mail,remail, created_at) values (:mail, :remail, NOW())', $param);
        //トップページに遷移する
        return redirect('/');
    }
}
