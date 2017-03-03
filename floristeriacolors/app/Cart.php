<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'client_id','fecha_compra','fecha_entrega','mensaje','de','para','direccion'
    ];
}
