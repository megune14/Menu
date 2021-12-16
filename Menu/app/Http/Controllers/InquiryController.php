<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function create(Request $request)
    {
        $inquiry = new Inquiry;
        $inquiry->fill([
            'condition'=>$request->condition,
            'operating'=>$request->operating,
            'version'=>$request->version,
        ])->save();
        return redirect('/MenuCreate');
    }
}
