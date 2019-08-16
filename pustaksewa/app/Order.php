<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }

      public function product()
    {
        return $this->belongsTo('App/Products');
    }
}
