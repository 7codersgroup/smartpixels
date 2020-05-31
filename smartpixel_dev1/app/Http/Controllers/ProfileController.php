<?php

namespace App\Http\Controllers;

use App\{Profile, User};
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;

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
		
		//Todo: Adjust validation and output errors on view
		$this->validate(request(), [
			'firstname' => 'required',
			'lastname' => 'required',
			'image_name' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
		]);
		$user->firstname = request('firstname');
		$user->lastname = request('lastname');
		$user->avatar = $this->imageUploadPost (request ('image_name'));
		$profile = new Profile;
		$profile->country = request('country');
		$profile->address = request('address');
		$profile->zip = request('zip');
		$profile->city = request('city');
		$profile->phone = request('phone');
		$user->save();
		$user->profile()->save($profile);
		
		return back ()->with ('success', 'Profile saved successfully');
	}
	
	public function update()
	{
		$user = User::find(Auth::id ());
		$this->validate(request(), [
			'firstname' => 'required',
			'lastname' => 'required',
			'image_name' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
		]);
		if(isset($user->profile)) {
			$user->firstname = request('firstname');
			$user->lastname = request('lastname');
			$user->profile->country = request('country');
			$user->profile->address = request('address');
			$user->profile->zip = request('zip');
			$user->profile->city = request('city');
			$user->profile->phone = request('phone');
			$user->avatar = $this->imageUploadPost (request ('image_name'));
			//$user->password = bcrypt(request('password'));
			
			$user->push();
		}
		else {
			$this->addProfile ();
		}
		
		return back();
	}
	
	public function imageUploadPost ($imagePath)
	{
		$options = ["folder"=>"samples"];
		//$imagePath = $imagePath->file($imagePath)->getRealPath();
		Cloudder::upload ($imagePath, null, $options);
		list($width, $height) = getimagesize ($imagePath);
		$image_url = Cloudder::show (Cloudder::getPublicId (), ["width" => $width, "height" => $height]);
		return $image_url;
	}
}
