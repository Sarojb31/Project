<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	
	
    /* Product*/
	public function showProductlist(){
		return view('BackEnd.productlist');
	}
	public function addProduct(){
		return view('BackEnd.productadd');
	}

	public function deleteProduct(){
		return view('BackEnd.productlist');
	}

}
