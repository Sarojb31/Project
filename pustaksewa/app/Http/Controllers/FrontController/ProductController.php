<?php

namespace App\Http\Controllers\FrontController;

use App\Product;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
     public function singleproduct($id){
     	dd($id);
        $data['product'] = Product::find($id);
    
        return view('FrontEnd.product',$data);

    }
}
