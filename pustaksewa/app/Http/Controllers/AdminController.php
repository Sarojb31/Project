<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminController extends Controller
{
   public function index(){

   	return view('BackEnd.admin');
   }

   public function showadminslist(){

        $data['user'] = Admin::all();
//        dd($user);
        return view("BackEnd.admin.list",$data);
//        $user = User::all();
//        return view("user.list")->with('user',$user);
    }
}
