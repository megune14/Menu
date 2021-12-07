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

     
    

    
}
