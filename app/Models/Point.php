<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $fillable = ['PointID','StoreID','Point'];

    public function insert() {
        $point = new Point();
    
        $point->PointID = 'grape';
        $point->StoreID = 'blue';
        $point->Point = 320;
    
        $fruit->save();
    }
            
    public  function updateAll() {
        Fruit::where('name', '!=', 'null')->update([
            'PointID' => 'banana',
            'StoreID' => 'yellow',
            'Point' => '200',
        ]);
    }
       
    }

    

/**public  function updateAll() {
    Point::where('point', '!=', 'null')->update([
        'point' => '100', ]);*/