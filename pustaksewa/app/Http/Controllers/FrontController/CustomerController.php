<?php

namespace App\Http\Controllers\FrontController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
   public function cart(){
    	return view('FrontEnd.cart');
    }
}
