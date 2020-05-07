<?php

namespace App\Http\Controllers;

use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Overtrue\LaravelFollow\Followable;

class ArtistController extends Controller
{
	use Followable;
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
		$images = Image::where ( 'user_id', '=', $id )
			//->where ('review', '!=', 'PENDING')
			->get ();
		$total_downloads = DB::table('images')->where([['user_id', '=', $id]])->sum ('downloads');
		$total_resources = DB::table('images')->where([['user_id', '=', $id]])->count ();
		
		
		return view('artist', compact('user', 'images', 'total_downloads', 'total_resources'));
	}
	
	public function followUserRequest(Request $request){
		
		
		$user = User::find($request->user_id);
		$data= Auth::user ()->toggleFollow($user);
		return response()->json(['success'=>$data]);
	}
}

