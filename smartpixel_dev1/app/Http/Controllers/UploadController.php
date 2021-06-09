<?php

	namespace App\Http\Controllers;

	use App\Category;
    use App\Image;
    use Cloudinary;
    use Cloudinary\Uploader;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Validation\ValidationException;
    use Illuminate\View\View;

    class UploadController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View
         */
        public function imageUpload()
        {
            $category = Category::get()->sortBy('category');
            return view('upload', compact('category'));
        }

        /**
         * Display a listing of the resource.
         *
         * @param Request $request
         * @return RedirectResponse
         * @throws ValidationException
         */
        public function imageUploadPost(Request $request): RedirectResponse
        {
            $this->validate($request, [
                'image_name' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);

            Cloudinary::config(array(
                "cloud_name" => 'fricapix',
                "api_key" => '223297176269546',
                "api_secret" => 'd9aR0T7su2KxF6uylpK9sUidYfo',
                "secure" => true
            ));

			$image_name = $request->file ('image_name')->getRealPath ();
            //Cloudder::upload ('Fricapix/preview/' . $image_name, null);
            $transformations = ["fricapix_s1", "fricapix_s2"];
			$options = ["public_id"=>"","folder"=>"Fricapix", "type"=>"private", "sign_url"=>true,
				"eager"=>array("transformation"=>$transformations[array_rand ($transformations,1)])];

            //Cloudder::upload ($image_name, null, $options);
            list($width, $height) = getimagesize($image_name);

            $result = Uploader::upload($image_name, $options);
            $image_url = $result['eager'][0]['secure_url'];
            $public_id = $result['public_id'];

            //Save images
            $this->saveImages($request, $image_url, $public_id);
            return redirect()->route('dashboard')->with('success', 'Image uploaded successfully');
        }

		/**
		 * @param Request $request
		 * @param $image_url
		 * @param $public_id
		 */
		public function saveImages (Request $request, $image_url, $public_id)
		{
			$image = new Image();
			//$image->title = $request->file('image_name')->getClientOriginalName();
			$image->url = $image_url;
			$image->public_id = $public_id;
			$image->description = $request['description'];
			$image->title = $request['title'];
			$image->user_id = Auth::id ();
			$image->tag = $request['tag'];
			$image->price = $request['price'];
			$image->rating = $request['rating'];
			$image->location = $request['location'];
			$image->category = $request['category'];
			$image->review = 'PENDING';

			$image->save ();
		}
	}
