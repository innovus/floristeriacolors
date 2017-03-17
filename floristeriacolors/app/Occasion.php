<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    protected $fillable = [
        'ocasion'
    ];

     public function products(){
        return $this->belongsToMany('FloristeriaColors\Product','product_occasions');
    }
}
