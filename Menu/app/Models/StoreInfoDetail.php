<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreInfoDetail extends Model
{
  protected $table = 'shops';

	protected $guarded = array('id');

	public $timestamps = false;



 }

 /*use HasFactory;
    protected $fillable = ['StoreName', 'Adress', 'Telephonenumber','E-mail'];

    public function getData() {
        $data = DB::table($this->table)->get();
        
        return $data;*/