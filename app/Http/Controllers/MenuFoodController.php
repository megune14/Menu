<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuFood;

use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuFoodController extends Controller
{
    //
    public function create(Request $request)
    {
  
      
      $MenuFood = new MenuFood;
      $form = $request->all();
      unset($form['token']);
      $MenuFood->fill($form)->save();
      return redirect('/admin/NewProduct');
  
    }
}
