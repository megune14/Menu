<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTable extends Model
{
    use HasFactory;
    protected $fillable = ['OrderID','DayTime','UserID','StoreID','TableNumber','Flag'];
    public function orderdetailtables()
    {
        return $this->hasMany('App\Models\OrderDetailTable');
    }
}
