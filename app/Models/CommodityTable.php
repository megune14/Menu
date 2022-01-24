<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityTable extends Model
{
    use HasFactory;
    //protected $guarded = array('CommodityID');
    protected $primaryKey = 'CommodityID';
    protected $fillable = ['CommodityID','CommodityName','Price','CommodityDetail','Allergy','Calory','StopFlag','CategoryID','StoreID','img']; //保存したいカラム名が複数の場合

    public static $rules = array(
        'CommodityName' => 'CommodityName',
        'Price' => 'Price',
        'CommodityDetail' => 'CommodityDetail',
        'Allergy' => 'Allergy',
        'Calory' => 'Calory',
        'StopFlag' => 'StopFlag',
        'CategoryID' => 'CategoryID',
        'StoreID' => 'StoreID',
        'img' => 'img',
        
    );

    public function getData(){
        return $this->CommodityID. ':'. $this->CommodityName. '(' . $this->Price .   $this->CommodityDetail  .  $this->Allergy  .  $this->Calory  .  $this->img . $this->StopFlag  . $this->CategoryID  . $this->StoreID  .')';
    }
    

    
}
