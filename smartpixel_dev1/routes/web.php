<?php
	
	use Illuminate\Support\Facades\Route;
	
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
	
	Route::get ('/', function () {
		return view ('welcome');
	});
	
	Auth::routes ();
	
	
	Auth::routes (['verify' => true]);
	
	Route::get ('verifydoc', 'VerifydocController@verifyDocs')->name ('verifydoc');
	Route::post ('verifydoc', 'VerifydocController@VerifyDocPost')->name ('doc.verify.post');
	
	Route::get ('verify-number', 'VerifyNumberController@verifyNumber')->name ('verify-number');
//Route::post('verifydoc', 'VerifydocController@VerifyDocPost')->name('doc.verify.post');
	
	
	Route::group (['middleware' => 'auth'], function () {
		Route::get ('/home', 'HomeController@index')->name ('home');
		Route::get ('upload', 'UploadController@imageUpload')->name ('upload');
		Route::post ('upload', 'UploadController@imageUploadPost')->name ('uploadImage');
		Route::get ('checkout', 'CheckoutController@checkout')->name ('checkout');
		Route::get ('account', 'AccountController@account')->name ('account');
		Route::get ('dashboard', 'DashboardController@dashboard')->name ('dashboard');
	});

