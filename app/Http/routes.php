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



Route::group(['prefix' => 'api'], function(){
	// Customer API Routes
	Route::get('get-available-days', 'APIController@GetAvailableDays');

	// Admin API Routes
	Route::get('get-all-appointments', 'AdminAPIController@GetAllAppointments');
	Route::get('get-appointment-info/{id}', 'AdminAPIController@GetAppointmentInfo');
	Route::get('get-all-availability', 'AdminAPIController@GetAllAvailability');
	Route::any('set-availability', 'AdminAPIController@SetAvailability');
});

// citas++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::group(['prefix' => 'admin'], function(){
	Route::get('/citas', 'AdminController@index');
	Route::any('/citas/login', 'AdminController@login');

	// Appointment Routes
	Route::get('appointments', 'AdminController@appointments');

	// Availability Routes
	Route::get('availability', 'AdminController@availability');
	Route::post('add/availability', 'AdminController@addAvailability');

	// Configuration Routes
	Route::get('configuration', 'AdminController@configuration');

	// Package Routes
	Route::get('packages', 'AdminController@packages');
	Route::get('edit-package/{package_id}', 'AdminController@editPackage');
	Route::post('update-package/{package_id}', array('as' => 'package.update'), 'AdminController@updatePackage');
});





Route::get('/paquetes', 'BookingController@getIndex');
Route::controller('booking', 'BookingController');
Route::controller('citas/admin', 'AdminController');

//end citas +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

// Category dependency injection
Route::bind('category', function($category){
    return App\Category::find($category);
});

// User dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
});


Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

// Carrito -------------

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth:user',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);


// Authentication routes...
Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);

// Paypal

// Enviamos nuestro pedido a PayPal
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));

// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));

Route::get('pcontrol',function(){
	return view('admin.home');
})->name('pcontrol');

Route::get('pcontrol2',function(){
	return view('admin.appointments');
})->name('pcontrol2');


Route::get('crearp',function(){
	return view('admin.packages.CreatePackage');
})->name('crearp');

// ADMIN -------------

Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function()
{

	Route::get('home', function(){
		return view('admin.home');
	});

	Route::resource('category', 'CategoryController');

	Route::resource('product', 'ProductController');

	Route::resource('user', 'UserController');

	Route::get('orders', [
		'as' => 'admin.order.index',
		'uses' => 'OrderController@index'
	]);

	Route::post('order/get-items', [
	    'as' => 'admin.order.getItems',
	    'uses' => 'OrderController@getItems'
	]);

	Route::get('order/{id}', [
	    'as' => 'admin.order.destroy',
	    'uses' => 'OrderController@destroy'
	]);





});


Route::get('/citas', 'AdminController@index');
Route::any('/citas/login', 'AdminController@login');

// Appointment Routes
Route::get('appointments', 'AdminController@appointments');

// Availability Routes
Route::get('availability', 'AdminController@availability');
Route::post('add/availability', 'AdminController@addAvailability');

// Configuration Routes
Route::get('configuration', 'AdminController@configuration');

// Package Routes
Route::get('packages', 'AdminController@packages');
Route::get('edit-package/{package_id}', 'AdminController@editPackage');
Route::post('update-package/{package_id}', array('as' => 'package.update'), 'AdminController@update');
