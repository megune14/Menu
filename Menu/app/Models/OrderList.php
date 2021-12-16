<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class OrderList extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'price' => 'price',
        'quantity' => 'quantity',
    );

    public function getData(){
        return $this->id. ':'. $this->name. '(' . $this->price .  $this->quantity . ')';
    }
    

    //use SoftDeletes;
}
