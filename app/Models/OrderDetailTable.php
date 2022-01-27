<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetailTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_table_OrderID',
        'Quantity',
        'CommodityID',
    ];
    public function ordertable()
    {
        return $this->belongsTo('App\Modele\OrderTable');
    }
}
