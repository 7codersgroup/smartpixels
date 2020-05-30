<?php
	
	namespace App\Http\Controllers\Auth;
	
	use App\Http\Controllers\Controller;
	use App\User;
	use Exception;
	use Illuminate\Support\Facades\Auth;
	use Laravel\Socialite\Facades\Socialite;
	
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
				
				$finduser = User::where ('email', $user->getEmail ())->first ();
				
				if($finduser){
					
					Auth::login($finduser);
					
					return redirect('/home');
					
				}else{
					$splitName = explode (' ', $user->name, 2); // Restricts it to only 2 values, for names like Billy Bob Jones
					$first_name = $splitName[0];
					$last_name = !empty($splitName[1]) ? $splitName[1] : ''; // If last name doesn't exist, make it empty
					
					$newUser = User::create([
						'firstname' => $first_name,
						'lastname' => $last_name,
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