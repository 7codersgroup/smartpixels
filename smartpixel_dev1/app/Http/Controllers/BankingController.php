<?php

	namespace App\Http\Controllers;

	use App\{Banking, User};
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Validation\ValidationException;

    class BankingController extends Controller
	{
		public function __construct ()
		{
			$this->middleware ('auth');
		}

		public function index ()
		{
			$banking = Banking::where ('user_id', '=', Auth::id ())->first ();
			return view ('payment-details', compact ('banking'));
		}

		/**
		 * @return RedirectResponse
		 * @throws ValidationException
		 */
		public function create ()
		{
			$user = User::find (Auth::id ());
			//Todo: Adjust validation and output error on views
			$this->validate (request (), [
				'bank_name' => 'required',
				'account_no' => 'required',
				'account_holder' => 'required'
			]);
			$bank = new Banking();
			$bank->bank_name = \request ('bank_name');
			$bank->account_no = \request ('account_no');
			$bank->account_holder = \request ('account_holder');
			$user->bank ()->save ($bank);

			return back ()->with ('success', 'Account details added successfully');
		}

		public function update ()
		{
			$user = User::find (Auth::id ());
			$this->validate (request (), [
				'bank_name' => 'required',
				'account_no' => 'required',
				'account_holder' => 'required'
			]);

			if (isset($user->bank)) {
				$user->bank->bank_name = \request ('bank_name');
				$user->bank->account_no = \request ('account_no');
				$user->bank->account_holder = \request ('account_holder');

				$user->push ();
			} else {
				$this->create ();
			}

			return back ()->with ('success', 'Account details updated successfully');
		}
	}
