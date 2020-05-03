<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //
	public function index()
	{
		return view('artist');
	}
	
	
	public function users()
	{
		$users = User::get();
		return view('users', compact('users'));
	}
	
	public function user($id)
	{
		$user = User::find($id);
		return view('usersView', compact('user'));
	}
	
	public function followUserRequest(Request $request){
		
		
		$user = User::find($request->user_id);
		$response = auth()->user()->toggleFollow($user);
		
		
		return response()->json(['success'=>$response]);
	}
}

