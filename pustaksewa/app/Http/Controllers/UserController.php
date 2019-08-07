<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /* User*/
	public function showUserlist(){
		return view('BackEnd.userlist');
	}
	public function showadminslist(){
		return view('BackEnd.adminslist');
	}

	public function addUser(){
		return view('BackEnd.useradd');
	}
	public function deleteUser(){
		return view('BackEnd.userlist');
	}
}
