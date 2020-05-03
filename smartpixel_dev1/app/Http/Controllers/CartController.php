<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
	public function getCart() {
		return view('cart');
	}
	
	public function removeItem($id)
	{
		\Cart::session(Auth::id())->remove($id);
		
		if (\Cart::session(Auth::id())->isEmpty()) {
			return redirect('/');
		}
		return redirect()->back()->with('success', 'Item removed from cart successfully.');
	}
	
	public function clearCart()
	{
		\Cart::session(Auth::id())->clear();
		
		return redirect('/');
	}
}
