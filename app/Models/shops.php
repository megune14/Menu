<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class shops extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'email',
        'shopname',
        'address',
        'tell',
        'Password',
    ];
}



