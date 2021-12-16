<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InquiryForm;

class InquiryController extends Controller
{
    public function create(Request $request)
    {
        $inquiryform = new InquiryForm;
        $inquiryform->fill([
            'condition'=>$request->condition,
            'operating'=>$request->operating,
            'version'=>$request->version,
        ])->save();
        return redirect('/MenuCreate');
    }
}
