<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
  return 'Hello World!';
});
*/
Route::get('/','Front@index');
Route::get('/home','Front@index');
Route::get('/products','Front@products');
Route::get('/products/details/{id}','Front@product_details');
Route::get('/products/category','Front@product_categories');
Route::get('/products/brands','Front@product_brands');
Route::get('/blog','Front@blog');
Route::get('/blog/post/{id}','Front@blog_post');
Route::get('/contact-us','Front@contact_us');
Route::get('/login','Front@login');

// Route::get('/checkLogin','Front@checkLogin');
// Route::get('/checkSignUp','Front@checkSignUp');
Route::get('/logout','SessionsController@destroy');
Route::get('/cart','Front@cartView');
Route::post('/cart','Front@cartAdd');
Route::get('/checkout','Front@checkout');
Route::get('/search/{query}','Front@search');
Route::get('/account','users@master');
// Route::get('/master', 'users@master');
Route::post('/register', 'users@store');
//Route::get('/login', 'users@create');
Route::post('/checkLogin', 'SessionsController@store');
//Route::get('/logout', 'users@destroy');


Route::get('blade', function () 
	{
		$foods = array('Humburger','Pizza','Fish','Milk') ;
		return view('page',array('name'=>'ziada','day'=>'Friday','foods'=>$foods)); 
	});

Route::get('/read',function(){
	$category = new App\Category();

	$data = $category->all(array('name','id'));

	foreach ($data as $list) {
		# code...
		echo $list->id . ' ' .$list->name.'<br>';
	}
});

Route::get('/update',function(){
	$category = App\Category::find(4);
	$category->name = 'BODO';
	$category->save();

	$data = $category->all(array('name','id'));

	foreach($data as $list)
	{
		echo $list->name.' '.$list->id.'<br>';
	}
});

Route::get('/delete',function(){
	$category = App\Category::find(6);
	$category->delete();

	$data = $category->all(array('name','id'));

	foreach($data as $list)
	{
		echo $list->name.' '.$list->id.'<br>';
	}
});

Route::get('/insert',function(){
	App\Category::create(array('name'=>'ZIADA'));
	return 'Category Added';
});