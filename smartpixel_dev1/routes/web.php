<?php
	
	use App\Image;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Route;
	use Symfony\Component\Console\Input\Input;
	
	
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
		return view ('home');
	});
	//Route::get ('/home', 'HomeController@index')->name ('/');
	Route::get ('/search', 'SearchController@search')->name ('search');
	Route::get ('artist', 'ArtistController@index')->name ('artist');
	Auth::routes ();
	
	
	Auth::routes (['verify' => true]);
	
	
	Route::get ('verifydoc', 'VerifydocController@verifyDocs')->name ('verifydoc');
	Route::post ('verifydoc', 'VerifydocController@VerifyDocPost')->name ('doc.verify.post');
	
	Route::get ('verify-number', 'VerifyNumberController@verifyNumber')->name ('verify-number');
	//Route::post('verifydoc', 'VerifydocController@VerifyDocPost')->name('doc.verify.post');
	
	
	Route::group (['middleware' => 'auth'], function () {
		Route::get ('/home', 'HomeController@index')->name ('home');
		Route::get ('/home', 'HomeController@index')->name ('home');
		Route::get ('upload', 'UploadController@imageUpload')->name ('upload');
		Route::post ('upload', 'UploadController@imageUploadPost')->name ('uploadImage');
		Route::get ('checkout', 'CheckoutController@checkout')->name ('checkout');
		Route::get ('account', 'AccountController@account')->name ('account');
		Route::get ('dashboard', 'DashboardController@dashboard')->name ('dashboard');
	});
	
	Route::any ( '/search', function (Request $request) {
		$q = $request->input ( 'query' );
		//$images = Image::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
		$images = DB::table('images')->join('users', 'user_id', '=', 'users.id')->where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
		if (count ( $images ) > 0)
			return view ( 'search', compact ( 'images' ));
		else
			return view ( 'search' , compact ( 'images' ))->with('message', 'No Image found. Try to search again !' );
	} );

