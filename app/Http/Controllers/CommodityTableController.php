<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommodityTable;
use App\Models\CategoryTable;

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
      $CategoryTable = new CategoryTable;
      $form = $request->all();
      $category = $CategoryTable->where('Category',$form['Category'])->first();
      if($category == null){
        $CategoryTable->insert([
          'Category' => $form['Category'],
          'StoreID' => Auth::id()
        ]);
        $category = $CategoryTable->where('Category',$form['Category'])->first();
      };
      $form['CategoryID'] = $category->CategoryID;
      $form['StoreID'] = $id;
      unset($form['Category']);
      unset($form['token']);
      
      if($request->file('img')){
        $filename=$request->file('img')->getClientOriginalName();
        $form['img']=$request->file('img')->store('public/images');
        $form['img'] = str_replace('public/images/', '', $form['img']);
      }
      $CommodityTable->fill($form)->save();
      

      return redirect('/admin/NewProduct');

    }

}
