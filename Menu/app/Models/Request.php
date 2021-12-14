<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'name',
        'address' => 'address',
        'email' => 'email',
        'tel' => 'tel',
        'leader' =>'leader',
    );
    public function getData(){
        return $this->id. ':'. $this->name. '(' . $this->address . ')';
    }
}
