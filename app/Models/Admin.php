<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
class Admin extends Authenticatable
{
    use HasFactory;
    use SoftDeletes; //追記
   //中略
   protected $dates = ['deleted_at'];
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $softCascade = ['CommodityTable'];
    protected $fillable = [
        'name',
        'email',
        'password',
        'shopname',
        'address',
        'tell',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($article) {
            $article->users()->delete();
        });
    }
}
