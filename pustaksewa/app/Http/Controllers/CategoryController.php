<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   	/* Category*/
	public function showCategorylist(){
		return view('BackEnd.categorylist');
	}
	public function addCategory(){
		return view('BackEnd.categoryadd');
	}
	public function deleteCategory(){
		return view('BackEnd.categorylist');
	}
}
