<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InquiryForm extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable = ['condition','operating','version'];
    public static $rules = array(
        'condition' => 'condition',
        'operating' => 'operating',
        'version' => 'version',
    );
}
