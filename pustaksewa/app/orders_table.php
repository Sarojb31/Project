<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders_table extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
