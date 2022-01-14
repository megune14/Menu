<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointController extends Controller
{
    //
    
    public function create() {
        Point::create([
            'pointID' => 'auauauau',
            'StoreID' => 'enenen',
            'Point' => 100
        ]);
      }
}
