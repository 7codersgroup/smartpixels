<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function edit()
	{
		$user = Auth::user();
		return view('profile-update', compact('user'));
	}
	
	public function addProfile() {
		$user = User::find(Auth::id ());
		$this->validate(request(), [
			'firstname' => 'required',
			'lastname' => 'required'
		
		]);
		$user->firstname = request('firstname');
		$user->lastname = request('lastname');
		$profile = new Profile;
		$profile->country = request('country');
		$profile->address = request('address');
		$profile->zip = request('zip');
		$profile->city = request('city');
		$profile->phone = request('phone');
		$user->save();
		$user->profile()->save($profile);
		
	}
	
	public function update()
	{
		$user = User::find(Auth::id ());
		$this->validate(request(), [
			'firstname' => 'required',
			'lastname' => 'required'
			
		]);
		if(isset($user->profile)) {
			$user->firstname = request('firstname');
			$user->lastname = request('lastname');
			$user->profile->country = request('country');
			$user->profile->address = request('address');
			$user->profile->zip = request('zip');
			$user->profile->city = request('city');
			$user->profile->phone = request('phone');
			//$user->password = bcrypt(request('password'));
			
			$user->push();
		}
		else {
			$this->addProfile ();
		}
		
		
		return back();
	}
}
