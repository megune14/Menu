<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderTable;
class OrderDetailTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_table_OrderID',
        'Quantity',
        'Flag',
        'CommodityID',
    ];
    public function ordertable()
    {
        return $this->belongsTo(OrderTable::class,'order_table_OrderID','OrderID');
    }
}
