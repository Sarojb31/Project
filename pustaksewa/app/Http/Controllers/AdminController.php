<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Product;
use App\Category;
use App\User;
use App\Donation;

class AdminController extends Controller
{
   public function index(){

   	$count['counterP']=Product::count();
   	$count['counterU']=User::count();


   	 return view("BackEnd.admin.dashboard",$count);
   }

   public function showadminslist(){

        $data['user'] = Admin::all();
//        dd($user);
        return view("BackEnd.admin.list",$data);
//        $user = User::all();
//        return view("user.list")->with('user',$user);
    }


}
