<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth','as'=>'admin.'],function(){
	Route::get('/','BackendController@showDashboard')/*->middleware('auth')*/;
	
	Route::get('/admins','UserController@showadminslist')->name('admins');
	Route::get('/user','UserController@showUserlist')->name('user');
	Route::get('/user/add','UserController@addUser')->name('user.add');
	
	/*=============================Product====================================*/

		Route::get('/product','ProductController@showProductlist')->name('product');
		Route::get('/product/add','ProductController@showProductForm')->name('product.add');
		Route::post('/product/add','ProductController@addProduct')->name('product.add');
		Route::get('/product/edit/{id}','ProductController@getEditProduct')->name('edit-product');
	    Route::post('/product/edit','ProductController@postEditProduct')->name('store-product');
		Route::get('/product/delete/{id}','ProductController@deleteProduct')->name('delete-product');


	/*=============================Category====================================*/


		Route::get('/category','CategoryController@showCategorylist')->name('category');
		Route::get('/category/add','CategoryController@showCategoryForm')->name('category.add');
		Route::post('/category/add','CategoryController@addCategory')->name('category.add');
		Route::get('/category/edit/{id}',  'CategoryController@getEditCategory')->name('edit-category');
	    Route::post('/category/edit',  'CategoryController@postEditCategory')->name('store-category');
	    Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('delete-category');

	

});


