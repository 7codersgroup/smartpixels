<?php

namespace App\Http\Controllers;

use App\Earning;
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
			->orderby ('created_at', 'desc')
            ->paginate (20);
		$images_review = Image::where ([['user_id', '=', Auth::id ()], ['review', '=', 'PENDING']])->orderby ('created_at', 'desc')->paginate (15);
		$images_approved = Image::where ([['user_id', '=', Auth::id ()], ['review', '=', 'APPROVED']])->orderby ('created_at', 'desc')->paginate (15);
		$images_rejected = Image::where ([['user_id', '=', Auth::id ()], ['review', '=', 'REJECTED']])->orderby ('created_at', 'desc')->paginate (15);
		$total_downloads = Image::where ([['user_id', '=', Auth::id ()]])->sum ('downloads');
		$total_likes = Image::where ( 'images.user_id', '=', Auth::id () )
			->join('likes', 'likeable_id', '=', 'images.id')
			->count();
		$earning = Earning::where('user_id', '=', Auth::id ())->first();

		return view('dashboard', compact ('images', 'images_approved', 'images_review', 'images_rejected', 'total_downloads', 'total_likes', 'earning'));
		//return redirect()->route('dashboard');

	}

	public function users()
	{
		$users = User::get();
		return view('users', compact('users'));
	}
}
