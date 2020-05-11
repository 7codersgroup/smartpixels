<?php
	
	namespace App\Http\Controllers;
	
	use JD\Cloudder\Facades\Cloudder;
	use Illuminate\Http\Request;
	use Ixudra\Curl\Facades\Curl;
	use Illuminate\Support\Facades\Auth;
	use App\Image;
	use UxWeb\SweetAlert\SweetAlert;
	use RealRashid\SweetAlert\Facades\Alert;
	
	class UploadController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function imageUpload ()
		{
			return view ('upload');
		}
		
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 * @throws \Illuminate\Validation\ValidationException
		 */
		public function imageUploadPost (Request $request)
		{
			$this->validate ($request, [
				'image_name' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
			]);
			
			$image = $request->file ('image_name');
			
			$name = $request->file ('image_name')->getClientOriginalName ();
			
			$image_name = $request->file ('image_name')->getRealPath ();;
			
			//Cloudder::upload ('Fricapix/preview/' . $image_name, null);
			Cloudder::upload ($image_name, null);
			
			list($width, $height) = getimagesize ($image_name);
			
			$image_url = Cloudder::show (Cloudder::getPublicId (), ["width" => $width, "height" => $height]);
			
			//save to uploads directory
			$image->move (public_path ("uploads"), $name);
			
			//Save images
			$this->saveImages ($request, $image_url);
			
			//SweetAlert::success('Image Uploaded Successfully', '');
			Alert::success('Success Title', 'Success Message');
			return redirect ()->route ('dashboard')->with ('status', 'Image Uploaded Successfully');
			//return redirect()->route('dashboard');
			
			
		}
		
		/**
		 * @param Request $request
		 * @param $image_url
		 */
		public function saveImages (Request $request, $image_url)
		{
			$image = new Image();
			//$image->title = $request->file('image_name')->getClientOriginalName();
			$image->url = $image_url;
			$image->description = $request['description'];
			$image->title = $request['title'];
			$image->user_id = Auth::id ();
			$image->tag = $request['tag'];
			$image->price = $request['price'];
			$image->rating = $request['rating'];
			$image->location = $request['location'];
			$image->category = $request['category'];
			$image->review = 'PENDING';
			
			/* $response = Curl::to('http://127.0.0.1:8081/api/images')
			->withData(['title'=>$request['title'], 'url'=>$image_url,  'description'=>$request['description'], 'userId'=>1,
			'category'=> $request['category'],
				 'tag'=> $request['tag'],
				 'price'=> $request['price'],
				 'rating'=> $request['rating'],
				 'location'=>$request['location']
			])
			->post(); */
			
			//var_dump($request);
			//dd($response);
			
			
			$image->save ();
		}
	}