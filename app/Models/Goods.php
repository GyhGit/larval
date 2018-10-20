<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public function category()
    {
        return $this->hasOne(category::class,'id','g_id');
    }
    //可修改字段
    protected $fillable=["name","g_id","price","details","is_on_sale","browse"];
}
