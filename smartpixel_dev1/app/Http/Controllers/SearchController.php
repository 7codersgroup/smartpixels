<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function search()
	{
		return view('search');
	}
}
