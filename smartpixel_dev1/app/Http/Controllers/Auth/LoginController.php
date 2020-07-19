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

	public function passwordLessLogin() {
		$this->validate (request (), [
			'magic_link_email' => 'required'
		]);

		if (User::where ('email', '=', request ('magic_link_email'))->first () == true) {
			$urlToDashBoard = MagicLink::create (
				new LoginAction(User::where ('email', '=', request ('magic_link_email'))->first (), redirect ('/dashboard'))
			)->url;
			$details = [
				'title' => 'Your login link',
				'body' => $urlToDashBoard,
				'email' => request ('magic_link_email')
			];
			Mail::to (request ('magic_link_email'))->send (new MyTestMail($details));
			return back ()->with ('success', 'Kindly check your email for the Magic Login Link');
		} else {
			return redirect (\route ('register'))->with ('error', 'You do not have an account with us, Kindly register to continue');
		}

		/*$urlToDashBoard = MagicLink::create(
			new LoginAction(User::where('email','=', 'mail@mail.com')->first(), redirect('/dashboard'))
		)->url;
		$details = [
			'title' => 'Your login link',
			'body' => $urlToDashBoard
		];
		Mail::to ('mrtolusamuel@gmail.com')-> send (new MyTestMail($details));
		//dd("Email is Sent.");*/
    }
}
