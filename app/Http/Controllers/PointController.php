<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Point;

class PointController extends Controller
{
    //
    
    public function create(Request $request)
    {

      $Point = new Point;
      $form = $request->all();
      $form['StoreID'] = Auth::id();
      unset($form['token']);
      $Point->fill($form)->save();
      return redirect('/admin/PointSetting');

    }

    public function setting() {
  		$md = new Point();
  		$data = $md->where('StoreID',Auth::id())->first();
  		return view('admin/html.PointSetting',['data' => $data]);
	}

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select *  from points where id = :id',$param);
        return view('PointSetting.edit',['form' => $item[0]]);
    }
    public function update(Request $request)
    {
      $md = new Point();
      $md->where('StoreID',Auth::id())->update([
        'Price' => $request->Price,
        'Point' => $request->Point,

      ]);

        return redirect('/admin/PointSetting');
    }
      
}