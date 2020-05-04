<?php

namespace App\Http\Controllers;

use App\Image;
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
		$images = DB::table('images')->where('user_id', '=', Auth::id ())->get();
		$images_review = DB::table('images')->where([['user_id', '=', Auth::id ()], ['review', '=', 'PENDING']])->get();
		$images_approved = DB::table('images')->where([['user_id', '=', Auth::id ()], ['review', '=', 'APPROVED']])->get();
		$images_rejected = DB::table('images')->where([['user_id', '=', Auth::id ()], ['review', '=', 'REJECTED']])->get();
		$total_downloads = DB::table('images')->where([['user_id', '=', Auth::id ()]])->sum ('downloads');
		
		
		return view('dashboard', compact ('images', 'images_approved', 'images_review', 'images_rejected', 'total_downloads'));
		//return redirect()->route('dashboard');
		
	}
	
}
