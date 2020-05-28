<?php

namespace App\Http\Controllers;

use App\Banking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	    return view ('payment-details');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment.details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        	'bank_name' => 'required',
        	'account_no' => 'required',
        	'account_holder' => 'required',
        ]);
     //   $request->user_id = Auth::id ();
       // Banking::create($request->all ());
        $bank = new Banking();
        $bank->bank_name = $request['bank_name'];
        $bank->account_holder = $request['account_holder'];
        $bank->account_no = $request['account_no'];
        $bank->user_id = Auth::id ();
        
        $bank->save ();
        return redirect ()->route('dashboard')
	            ->with('success','Banking information added successfully');
    }

    function saveDetails() {
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Banking  $banking
     * @return \Illuminate\Http\Response
     */
    public function show(Banking $banking)
    {
        $banking = Banking::find($banking)->where('user_id', '=', Auth::id());
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banking  $banking
     * @return \Illuminate\Http\Response
     */
    public function edit(Banking $banking)
    {
	    return view('banking.edit',compact('banking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banking  $banking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banking $banking)
    {
	    $request->validate([
		    'bank_name' => 'required',
		    'account_no' => 'required',
		    'account_holder' => 'required',
	    ]);
	
	    $banking->update ($request->all ());
	
	    return redirect ()->route('dashboard')
		    ->with('success','Banking information updated successfully');
    }
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Banking $banking
	 * @return \Illuminate\Http\Response
	 * @throws \Exception
	 */
    public function destroy(Banking $banking)
    {
        $banking->delete ();
        
        return redirect ()->route ('dashboard')
	                    ->with ('success', 'Account information deleted successfully');
    }
}
