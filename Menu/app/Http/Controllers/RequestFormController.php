<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function add(Request $request)
    {
        return view('RequestForm.add');
    }
    public function create(Request $request)
    {
        $this->validate($request,person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/RequestForm');
    }
}
