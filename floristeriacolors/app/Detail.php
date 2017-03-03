<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'cantidad','product_id','price_id','precio','cart_id'
    ];
}
