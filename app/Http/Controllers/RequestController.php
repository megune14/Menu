<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForm;


class RequestController extends Controller
{
    public function add(Request $request)
    {
        return view('Request.add');
    }
    public function create(Request $request)
    {
      $RequestForm = new RequestForm;
      $RequestForm->fill([
        'name'=>$request->name,
        'address'=>$request->address,
        'email'=>$request->email,
        'tel'=>$request->tel,
        'leader'=>$request->leader,
      ])->save();
      return redirect('/admin/RequestComplete');
    }
}
