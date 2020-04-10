<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class VerifyNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyNumber()
    {
        return view('verify-number');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyNumberPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
   
    }
}