<?php

namespace App\Http\Controllers;

use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlert;

class DashboardController extends Controller
{
    //
	public function dashboard()
	{
		//$images = Image::all ();
	//	$images = DB::table('images')->where('user_id', '=', Auth::id ())->get();
		$images = Image::where ( 'user_id', '=', Auth::id () )
			->get ();
		$images_review = Image::where ([['user_id', '=', Auth::id ()], ['review', '=', 'PENDING']])->get ();
		$images_approved = Image::where ([['user_id', '=', Auth::id ()], ['review', '=', 'APPROVED']])->get ();
		$images_rejected = Image::where ([['user_id', '=', Auth::id ()], ['review', '=', 'REJECTED']])->get ();
		$total_downloads = Image::where ([['user_id', '=', Auth::id ()]])->sum ('downloads');
		$total_likes = Image::where ( 'images.user_id', '=', Auth::id () )
			->join('likes', 'likeable_id', '=', 'images.id')
			->count();
		
		
		return view('dashboard', compact ('images', 'images_approved', 'images_review', 'images_rejected', 'total_downloads', 'total_likes'));
		//return redirect()->route('dashboard');
		
	}
	
	public function users()
	{
		$users = User::get();
		return view('users', compact('users'));
	}
}
