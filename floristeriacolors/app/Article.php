<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titulo','descripcion','imagen'
    ];
}
