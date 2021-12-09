<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestsForm extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'adress', 'e-mail','tel','leader'];
    public function create() {
        Fruit::create([
            'name' => 'yama',
            'adress' => 'yama',
            'e-mail' => 'yama',
            'tel' => '080',
            'leader' =>'ten',
        ]);
    }
}
