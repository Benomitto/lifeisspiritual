<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ourbooks;
use Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
	
	
	
	public function index()
    {
        //
		
	
		return view('checkout')->with([
			'users'=>User::all(),
			
			
		]);
    }
	
	
	
}
