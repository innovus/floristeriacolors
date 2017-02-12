<?php

namespace FloristeriaColors;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	
    protected $fillable = [
        'name',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('FloristeriaColors\Product');
    }

   


}
