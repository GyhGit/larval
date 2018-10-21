<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Classe
 *
 * @property int $id
 * @property string $name
 * @property int $c_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classe whereCId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Classe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Classe extends Model
{
    //可修改字段
    protected $fillable=["name","c_id"];
}
