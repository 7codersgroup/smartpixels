<?php

namespace App\Http\Controllers;

use App\{Profile, User};
use Cloudinary;
use Cloudinary\Uploader;
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

		//Todo: Adjust validation and output errors on view
		$this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'image_name' => 'mimes:jpeg,bmp,jpg,png|between:1, 6000',
        ]);
		$user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->avatar = $this->imageUploadPost(request('image_name'));
        $profile = new Profile;
        $profile->country = request('country');
        $profile->address = request('address');
        $profile->zip = request('zip');
        $profile->city = request('city');
        $profile->phone = request('phone');
        $user->save();
        $user->profile()->save($profile);

        return back()->with('success', 'Profile updated successfully');
    }

    public function update()
	{
		$user = User::find(Auth::id ());
		$this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'image_name' => 'mimes:jpeg,bmp,jpg,png|between:1, 6000',
        ]);
		if(isset($user->profile)) {
            $user->firstname = request('firstname');
            $user->lastname = request('lastname');
            $user->profile->country = request('country');
            $user->profile->address = request('address');
            $user->profile->zip = request('zip');
            $user->profile->city = request('city');
            $user->profile->phone = request('phone');
            if (request('image_name') != null)
                $user->avatar = $this->avatarUploadPost(request('image_name'));
            //$user->password = bcrypt(request('password'));

            $user->push();
        } else {
            $this->addProfile();
        }

        return redirect()->route('account')->with('success', 'Profile updated successfully');
    }

    public function avatarUploadPost($imagePath)
    {
        Cloudinary::config(array(
            "cloud_name" => 'fricapix',
            "api_key" => '223297176269546',
            "api_secret" => 'd9aR0T7su2KxF6uylpK9sUidYfo',
            "secure" => true
        ));

        $image_name = $imagePath->getRealPath();
        //Cloudder::upload ('Fricapix/preview/' . $image_name, null);
        $transformations = ["avatar"];
        $options = ["public_id" => "", "folder" => "profiles", "type" => "private", "sign_url" => true,
            "eager" => array("transformation" => $transformations[array_rand($transformations, 1)])];

        //Cloudder::upload ($image_name, null, $options);
        list($width, $height) = getimagesize($image_name);

        $result = Uploader::upload($image_name, $options);
        $image_url = $result['eager'][0]['secure_url'];
        $public_id = $result['public_id'];
        return $image_url;
    }
}
