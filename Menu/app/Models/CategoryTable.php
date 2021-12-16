<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTable extends Model
{
    use HasFactory;
    protected $primaryKey = 'CategoryID';
    protected $fillable = ['CategoryID','StoreID','Category'];
}
