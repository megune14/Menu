<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommodityTable;

use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;

// 現在認証しているユーザーを取得
$admin = Auth::user();
// 現在認証しているユーザーのIDを取得
$id = Auth::id();


class CommodityTableController extends Controller
{
    //
    public function create(Request $request)
  {

    // 現在認証しているユーザーを取得
    $admin = Auth::user();
    // 現在認証しているユーザーのIDを取得
    $id = Auth::id();

        if ($request->file('img')) {
            $this->validate($request, [
                'img' => [
                    // 空でないこと
                    'required',
                    // アップロードされたファイルであること
                    'file',
                    // 画像ファイルであること
                    'image',
                    // MIMEタイプを指定
                    'mimes:jpeg,png',
                ]
            ]);
          }

      $CommodityTable = new CommodityTable;
      $form = $request->all();
      $form['StoreID'] = $id;
      unset($form['token']);
      if($request->file('img')){
        $filename=$request->file('img')->getClientOriginalName();
        $form['img']=$request->file('img')->store('public/images');
      }
      $CommodityTable->fill($form)->save();
      

      return redirect('/admin/NewProduct');

    }

}
