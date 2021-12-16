<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function add(Request $request)
    {
        return view('Request.add');
    }
    public function create(Request $request)
    {
      $RequestForm = new RequestForm;
      $form = $request->all();
      unset($form['token']);
      $RequestForm->fill($form)->save();
      return redirect('/RequestComplete');
    }
}
