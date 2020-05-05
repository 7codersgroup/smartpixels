<?php

namespace App\Http\Controllers;


use App\Http\Resources\Image;
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
		
	
		$image = DB::select("select price from images where id = '$request->imageId'");
		//$images = DB::table('images')->where('id', '=', $request->imageId)->get();
		
		
		
		\Cart::session(Auth::id ());
		\Cart::add(array(
			'id' => uniqid (),
			'name' => $request->title,
			'price' => $request->price,
			'quantity' => 1,
			'attributes' =>  array(
				'url' => $request->url
			)
		));
		
		return redirect()->back()->with('success', 'Item added to cart successfully.');
	}
	
	public function LikePost(Request $request){
		
		$post = Image::find($request->id);
		$response = auth()->user()->toggleLike($post);
		
		return response()->json(['success'=>$response]);
	}
}
