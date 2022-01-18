<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuFood extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'price' => 'price',
        'quantity' => 'quantity',
        'img' => 'img',
        'explanation' => 'explanation',
        'calorie' => 'calorie',
        'allergy' => 'allergy',
        'category' => 'category',
    );

    public function getData(){
        return $this->id. ':'. $this->name. '(' . $this->price .  $this->quantity .  $this->explanation .  $this->allergy .  $this->calorie . $this->category . $this->img .')';
    }
    

    use SoftDeletes;
}
