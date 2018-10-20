<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function classe()
    {
       return $this->hasOne(Classe::class,'c_id','a_id');


    }

    //可修改字段
    protected $fillable=["title","author","a_id","content"];
}
