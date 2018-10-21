<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Goods
 *
 * @property int $id
 * @property string $name
 * @property int $g_id
 * @property float $price
 * @property string $details
 * @property int $is_on_sale
 * @property int $browse
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereGId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereIsOnSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Goods extends Model
{
    public function category()
    {
        return $this->hasOne(category::class,'id','g_id');
    }
    //可修改字段
    protected $fillable=["name","g_id","price","details","is_on_sale","browse","logo"];
}
