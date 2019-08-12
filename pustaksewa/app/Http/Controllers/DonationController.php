<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{

	public function showDonationlist(){
		$data['donation'] = Donation::all(); 
    	// dd($data);
      return view('BackEnd.Product.listproduct',$data);
	}

	public function showDonationForm(){
		$data['category'] = Category::all();
		// dd($data);
		return view('BackEnd.product.productform',$data);
	}

    public function donateBook(Request $request){
       // dd($request->all());

   //  	$request->validate([
   //  		'product_name' => 'required|max:50',
   //  		'price' => 'required',
			// 'quantity' => 'required',
   //  		'discount' => 'nullable',
   //  		'description' => 'required',
   //  		'category' => 'required',
   //  		'product_image' => 'required|mimes:jpg,png,jpeg',
   //  	]);


    	$product = new Product();
    	$product->product_name = $request->title;
    	$product->price = $request->price;

    	$product->quantity = $request->quantity;
    	$product->discount = $request->discount;
    	$product->description = htmlentities($request->description);
    	$product->added_by = \Auth::user()->id;

    	$product->cat_id = $request->category;
    
// 
    	


    	//product image upload
		if(($request->product_image != null)){
            $product->product_image = $request->file('product_image')->store('product','public');
        }

    	$product->save();


		// foreach($request->other_images as $value){
  //           $product_image = new ProductImage();
  //           $product_image->product_id = $product->id;
		//     $product_image->image =  $value->store('product','public');
		//     $product_image->save();

  //       }

    	\Session::flash('success','Product Added Successfully');
    	return redirect()->route('admin.product');
    }

}
