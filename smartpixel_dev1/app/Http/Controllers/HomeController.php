<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
	    //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	public function search (Request $request){
		
		//Send an empty variable to the view, unless the if logic below changes, then it'll send a proper variable to the view.
		$results = null;
		
		//Runs only if the search has something in it.
		if (!empty($request->title)) {
			
			$results = Property::all()->where([['title', 'like', '%%']])->get();
		}
		return view('admin.article.index')->with('results', $results);
	}
}
