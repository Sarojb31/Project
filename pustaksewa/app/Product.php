<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
protected $table = "products";

    public function category()
    {

        return $this->belongsto('App\Category');
    }

    public function user()
    {
    	return $this->belongsto('App\User','added_by','id');
    }

    public function admin()
    {
    	return $this->belongsto('App\Admin');
    }

     public function order()
    {
        return $this->hasMany('App\Order');
    }
}
