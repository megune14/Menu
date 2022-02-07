<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInquiry;

class UserInquiryController extends Controller
{
    //
    public function create(Request $request)
    {
        $inquiryform = new UserInquiry;
        $inquiryform->fill([
            'email'=>$request->email,
            'name'=>$request->name,
            'tell'=>$request->tell,
            'inquiry'=>$request->inquiry,
        ])->save();
        return redirect('/Inquiry');
    }
}

