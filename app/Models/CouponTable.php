<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CouponTable extends Model
{
    use HasFactory;
    protected $primaryKey = 'CouponID ';
    protected $fillable = ['CouponID','StoreID','CommodityID','Point','FirstDay','LastDay']; //保存したいカラム名が複数の場合

    public static $rules = array(
        'StoreID' => 'StoreID',
        'CommodityID' => 'CommodityID',
        'Point' => 'Point',
        
        'FirstDay' => 'FirstDay',
        'LastDay' => 'LastDay',
       
        
    );

    public function getData(){
        return $this->CouponID. ':'. $this->StoreID. '(' . $this->CommodityID .   $this->Point  .  $this->FirstDay  .  $this->LastDay  .  $this->img . $this->StopFlag  . $this->CategoryID  . $this->StoreID  .')';
        
    }
    
    //use SoftDeletes;

   // protected $dates = ['deleted_at'];

   
}
