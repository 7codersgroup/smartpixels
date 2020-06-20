<?php

namespace App\Http\Controllers;


use App\Image;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

	public function search()
	{
		return view('search');
	}

	public function addToCart(Request $request)
	{
		//	$image = DB::select("select price from images where id = '$request->imageId'");
		$images = Image::where ('id', '=', $request->input ('imageId'))->first ();
		//var_dump ($images->id);


		\Cart::session(Auth::id ());
		if(\Cart::get($images->id) == true) {
            \Cart::update($images->id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => 1
                ),
            ));
        } else {
            \Cart::add(array(
                'id' => $images->id,
                'name' => $images->title,
                'price' => $images->price,
                'quantity' => 1,
                'attributes' =>  array(
                    'url' => $images->url
                )
            ));
        }



		return redirect()->back()->with('success', 'Item added to cart successfully.');
	}

	public function likePost (Request $request)
	{

		$image = Image::find($request->id);
		$response = \Auth::user ()->toggleLike ($image);

		return response()->json(['success'=>$response]);
	}
}
