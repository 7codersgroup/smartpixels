<?php

namespace App\Http\Controllers;

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
	
	public function update(User $user)
	{
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6|confirmed'
		]);
		
		$user->name = request('name');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		
		$user->save();
		
		return back();
	}
}
