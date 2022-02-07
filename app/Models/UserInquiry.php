<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInquiry extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable = ['name','tell','email','inquiry'];
    public static $rules = array(
        'name' => 'name',
        'tell' => 'tell',
        'email' => 'email',
        'inquiry' => 'inquiry',
    );
}
