<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
    public function edit(Request $request)
    {
      $param =[]
    }
      
}