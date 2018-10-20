<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //可修改字段
    protected $fillable=["name","c_id"];
}
