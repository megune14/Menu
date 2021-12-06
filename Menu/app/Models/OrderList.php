<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'name', 'price','quantity','point','total'];

    public function create() {
        OrderList::create([
            'image' => 'apple',
            'name' => 'red',
            'price' => 900,
            'quantity' => 100,
            'point' => 100,
            'total' => 100,
        ]);
      }

      public  function updateAll() {
        OrderList::where('name', '!=', 'null')->update([
            'image' => 'banana',
            'name' => 'yamade',
            'price' => 200,
            'quantity' => 300,
            'point' => 2,
            'total' => 300,
        ]);
    }

    public function insert() {
        $fruit = new OrderList();
    
        $fruit->image = 'grape';
        $fruit->name = 'blue';
        $fruit->price = 320;
    
        $fruit->save();
    }

    
}
