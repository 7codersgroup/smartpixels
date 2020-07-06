<?php

    use App\Image;
    use Illuminate\Http\Request;
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
        return view ('home');
    });
    Route::get ('/home', 'HomeController@index')->name ('/');
    Route::get ('/home', 'HomeController@index')->name ('home');
    //Route::get ('/home', 'HomeController@index')->name ('home');
    Route::get ('/search', 'SearchController@search')->name ('search');
    Route::get ('artist', 'ArtistController@index')->name ('artist');
    Route::get ('/auth0/callback', '\Auth0\Login\Auth0Controller@callback')->name ('auth0-callback');
	Route::get ('/login', 'Auth\Auth0IndexController@login')->name ('login');
	Route::get ('/logout', 'Auth\Auth0IndexController@logout')->name ('logout')->middleware ('auth');
	Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle')->name ('google');
	Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
	Route::post('/login/magic', 'Auth\LoginController@passwordLessLogin')->name ('magic-login');

	Auth::routes (['verify' => true]);

	Route::get ('verifydoc', 'VerifydocController@verifyDocs')->name ('verifydoc');
	Route::post ('verifydoc', 'VerifydocController@VerifyDocPost')->name ('doc.verify.post');

    Route::get ('verify-number', 'VerifyNumberController@verifyNumber')->name ('verify-number');
	//Route::post('verifydoc', 'VerifydocController@VerifyDocPost')->name('doc.verify.post');

    Route::group (['middleware' => 'auth','verified'], function () {
		Route::get ('upload', 'UploadController@imageUpload')->name ('upload')->middleware ('verified');
		Route::post ('upload', 'UploadController@imageUploadPost')->name ('uploadImage');
		Route::get ('checkout', 'CheckoutController@checkout')->name ('checkout');
		Route::get ('account', 'AccountController@account')->name ('account');
		Route::get ('dashboard', 'DashboardController@dashboard')->name ('dashboard');
		Route::get ('/cart', 'CartController@getCart')->name ('checkout.cart');
		Route::get ('/cart/item/{id}/remove', 'CartController@removeItem')->name ('checkout.cart.remove');
		Route::get ('/cart/clear', 'CartController@clearCart')->name ('checkout.cart.clear');
		Route::post ('/search/add/cart', 'SearchController@addToCart')->name ('product.add.cart');
		Route::get ('/cart', 'CartController@getCart')->name ('checkout.cart');
		Route::get ('/cart/item/{id}/remove', 'CartController@removeItem')->name ('checkout.cart.remove');
		Route::get ('/cart/clear', 'CartController@clearCart')->name ('checkout.cart.clear');
		Route::get ('artist/{id}', 'ArtistController@user')->name ('artist.view');
		Route::post ('follow', 'ArtistController@followUserRequest')->name ('follow');
		Route::post ('like', 'SearchController@likePost')->name ('like');
		//Route::post('like', 'ArtistController@LikePost')->name('like');
		Route::get ('change-password', 'ChangePasswordController@index')->name ('change-password');
		Route::post ('change-password', 'ChangePasswordController@store')->name ('change.password');
		//Route::resource('banking','BankingController');
		Route::get ('banking-details', 'BankingController@index')->name ('bank-details');
		Route::post ('banking-details/update', 'BankingController@update')->name ('update-bank-details');
		Route::post ('banking-details/add', 'BankingController@create')->name ('add-bank-details');
		Route::get('profile-update',  ['as' => 'profile-update', 'uses' => 'ProfileController@edit']);
		Route::post('profile-update',  'ProfileController@update')->name ('profileUpdate');
        Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
        Route::get ('/payment/callback', 'PaymentController@handleGatewayCallback')->name ('paystack.callback');
	});


    //Route::get('users', 'ArtistController@users')->name('users');

    Route::any ('/search', function (Request $request) {
		 $q = $request->input ('query');
		//$images = Image::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
		/*$images = DB::table('images')->join('users', 'user_id', '=', 'users.id')
				->where ( 'title', 'LIKE', '%' . $q . '%' )
				->orWhere ( 'description', 'LIKE', '%' . $q . '%' )
				->get ();*/
		/*$images = Image::where ('title', 'LIKE', '%' . $q . '%')
			->orWhere ('description', 'LIKE', '%' . $q . '%')
			->orWhere ('tag', 'LIKE', '%' . $q . '%')
			->where ('review', '==', 'APPROVED')
			//->where ('review', '!=', 'REJECTED')
			->orderby ('created_at', 'desc')
			->paginate (15);*/

        $images = Image::where(function ($query) use ($q) {
            $query->where('title', 'LIKE', '%' . $q . '%')
                ->where ('review', 'APPROVED');
        })->orWhere(function($query) use ($q) {
            $query->where('description', 'LIKE', '%' . $q . '%')
                ->where ('review', 'APPROVED');
        })->orWhere(function($query) use ($q) {
            $query->where('tag', 'LIKE', '%' . $q . '%')
                ->where ('review', 'APPROVED');
        })->orderby ('created_at', 'desc')
            ->paginate (15);
       // ->dd();

		$request->flashOnly ('query');
		if (count ($images) > 0) {
			return view ('search', compact ('images'));
		} else {
			$request->flashOnly ('query');
			return view ('search', compact ('images'),
                ['success', 'No related Image found. Try to search again !']);
		}
	});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
