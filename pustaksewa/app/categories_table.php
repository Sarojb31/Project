<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories_table extends Model
{
    protected $table = "categories";

    public function user()
    {
        return $this->belongsTo('App\User','added_by','id');
    }

    public function products()
    {
        return $this->hasMany('App\product_table');
    }
}
