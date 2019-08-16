<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

	public function orderlist(){

		return view('BackEnd.Order.order');
	}
}
