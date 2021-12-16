<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable = ['name','address','email','tel','leader'];
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
