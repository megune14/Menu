<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuFood;

use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuFoodController extends Controller
{
  public function create(Request $request)
  {

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

      $MenuFood = new MenuFood;
      $form = $request->all();
      unset($form['token']);
      
      if($request->file('img')){
        $filename=$request->file('img')->getClientOriginalName();
        $form['img']=$request->file('img')->store('public/images');
      }
      $MenuFood->fill($form)->save();


      return redirect('/admin/NewProduct');

    }

//   public function store(Request $request)
//   {
//       // 新規postを作成
//
//
//       // バリデーションルール
//       $inputs=request()->validate([
//
//           'img'=>'img'
//       ]);
//
//       // 画像ファイルの保存場所指定
//
//           $filename=request()->file('img')->getClientOriginalName();
//           $inputs['img']=request('img')->store('public/images');
//

        // postを保存

//}
}
