<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// 省略

class StoreInfoDetail extends Model
{
  protected $table = 'shops';

	protected $guarded = array('id');

	public $timestamps = false;

  use SoftDeletes;

   }

 /*use HasFactory;
    protected $fillable = ['StoreName', 'Adress', 'Telephonenumber','E-mail'];

    public function getData() {
        $data = DB::table($this->table)->get();
        
        return $data;*/