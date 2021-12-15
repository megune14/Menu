<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Coupon extends Model
{
    use HasFactory;

   protected $guarded = array('id');

   public static $rules = array(
     'name' => 'required',
     'point' => 'point',
   );

   public function getData(){
       return $this->id. ':'. $this->name. '(' . $this->point . ')';
 }
//

use SoftDeletes;

    
}
