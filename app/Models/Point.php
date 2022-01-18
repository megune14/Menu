<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $guarded = array('id');

   public static $rules = array(
     'Price' => 'Price',
     'Point' => 'Point',
   );

   public function getData(){
       return $this->id. ':'. $this->price. '(' . $this->point . ')';
}

}

/**public  function updateAll() {
    Point::where('point', '!=', 'null')->update([
        'point' => '100', ]);*/

