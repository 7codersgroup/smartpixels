<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MyTestMail;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use MagicLink\Actions\LoginAction;
use MagicLink\MagicLink;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	/**
	 *Todo: Link with magic link form to allow login with magic link
	 */
	public function passwordLessLogin() {
	    $urlToDashBoard = MagicLink::create(
		    new LoginAction(User::where('email','=', 'mail@mail.com')->first(), redirect('/dashboard'))
	    )->url;
		$details = [
			'title' => 'Your login link',
			'body' => $urlToDashBoard
		];
	    Mail::to ('mrtolusamuel@gmail.com')-> send (new MyTestMail($details));
		//dd("Email is Sent.");
    }
}
