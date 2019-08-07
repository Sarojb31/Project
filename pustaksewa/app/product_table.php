<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_table extends Model
{
    public function category()
    {
        return $this->belongsto('App\categories_table');
    }

    public function user()
    {
    	return $this->belongsto('App\User');
    }
}
