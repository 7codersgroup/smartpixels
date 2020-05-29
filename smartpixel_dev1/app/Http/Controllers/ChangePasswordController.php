<?php
	
	namespace App\Http\Controllers;
	
	use App\Rules\MatchOldPassword;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Hash;
	
	class ChangePasswordController extends Controller
	{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct ()
		{
			$this->middleware ('auth');
		}
		
		/**
		 * Show the application dashboard.
		 *
		 * @return \Illuminate\Contracts\Support\Renderable
		 */
		public function index ()
		{
			return view ('change-password');
		}
		
		/**
		 * Show the application dashboard.
		 *
		 * @param Request $request
		 * @return \Illuminate\Contracts\Support\Renderable
		 */
		public function store (Request $request)
		{
			$request->validate ([
				'current_password' => ['required', new MatchOldPassword],
				'new_password' => ['required'],
				'new_confirm_password' => ['same:new_password'],
			]);
			
			User::find (auth ()->user ()->id)->update (['password' => Hash::make ($request->new_password)]);
			
			return redirect (\route ('account'))->with ('success', 'Password changed successfully!');
			//dd('Password change successfully.');
		}
	}