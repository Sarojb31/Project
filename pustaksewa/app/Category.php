<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
     protected $table = "categories";

    public function user()
    {
        return $this->belongsTo('App\User','added_by','id');
    }

    public function product()
    { 
        return $this->hasMany('App\Product');
}

public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

}
