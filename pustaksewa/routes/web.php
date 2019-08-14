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
/*==================================FrontEnd Routes COllection==========================*/ 


Auth::routes();

	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/shop', 'HomeController@shop')->name('shop');
	Route::get('/about', 'HomeController@about')->name('about');
	Route::get('/contact', 'HomeController@contact')->name('contact');


	Route::get('/cart', 'FrontController\CustomerController@cart')->name('cart');
	Route::get('/product/{id}', 'FrontController\ProductController@singleproduct')->name('product');


/*==================================Admin Routes COllection==========================*/ 

Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::group(['prefix'=>'admin','middleware' => ['auth:admin']], function () {
    // routes...
	
	
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/','AdminController@index')->name('admin.dashboard');


	Route::get('/admins','AdminController@showadminslist')->name('admin.admins');
	Route::get('/user','UserController@showUserlist')->name('admin.user');

	Route::get('/user/add','UserController@getaddUser')->name('admin.user.register');
	Route::post('/user/add','UserController@addUser')->name('admin.user.register');

	Route::post('/user/delete/{id}','UserController@deleteUser')->name('admin.user.delete');
	Route::get('/user/edit','UserController@editUser')->name('admin.user.edit');
	
	/*=============================Product====================================*/

		Route::get('/product','ProductController@showProductlist')->name('admin.product');
		Route::get('/product/add','ProductController@showProductForm')->name('admin.product.add');
		Route::post('/product/add','ProductController@addProduct')->name('admin.product.add');
		Route::get('/product/edit/{id}','ProductController@getEditProduct')->name('admin.edit-product');
	    Route::post('/product/edit','ProductController@postEditProduct')->name('admin.store-product');
		Route::get('/product/delete/{id}','ProductController@deleteProduct')->name('admin.delete-product');

		/*=============================Donation====================================*/
		Route::get('/donation/add','ProductController@showProductForm')->name('admin.donation.add');
		Route::post('/donation/add','ProductController@addProduct')->name('admin.donation.add');
		Route::get('/donation','ProductController@showProductlist')->name('admin.donation');



	/*=============================Category====================================*/


		Route::get('/category','CategoryController@showCategorylist')->name('admin.category');
		Route::get('/category/add','CategoryController@showCategoryForm')->name('admin.category.add');
		Route::post('/category/add','CategoryController@addCategory')->name('admin.category.add');
		Route::get('/category/edit/{id}',  'CategoryController@getEditCategory')->name('admin.edit-category');
	    Route::post('/category/edit',  'CategoryController@postEditCategory')->name('admin.store-category');
	    Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('admin.delete-category');






});


	




