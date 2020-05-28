<?php
	
	namespace App\Http\Controllers\Auth;
	
	use App\Http\Controllers\Controller;
	use Laravel\Socialite\Facades\Socialite;
	use Illuminate\Support\Facades\Auth;
	use Exception;
	use App\User;
	
	class GoogleController extends Controller
	{
		/**
		 * Create a new controller instance.
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function redirectToGoogle()
		{
			return Socialite::driver('google')->redirect();
		}
		
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function handleGoogleCallback()
		{
			try {
				
				$user = Socialite::driver('google')->user();
				
				$finduser = User::where('google_id', $user->id)->first();
				
				if($finduser){
					
					Auth::login($finduser);
					
					return redirect('/home');
					
				}else{
					$newUser = User::create([
						'firstname' => $user->givenName,
						'lastname' => $user->familyName,
						'email' => $user->email,
						'google_id'=> $user->id
					]);
					
					Auth::login($newUser);
					
					return redirect('/home');
				}
				
			} catch (Exception $e) {
				dd($e->getMessage());
			}
		}
	}