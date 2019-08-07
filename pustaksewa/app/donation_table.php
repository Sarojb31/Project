<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donation_table extends Model
{
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
