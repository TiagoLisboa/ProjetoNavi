<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}

    // Create -> open login view
    public function create ()
    {
    	return view('sessions.create');
    }

    // Store -> login
    public function store ()
    {
	    if (! auth()->attempt(request(['email', 'password'])) ) {
	      return back()->withErrors([
	        'message' => 'Por favor, verifeque suas credênciais e tente novamente.'
	      ]);
	    }

	    return redirect()->home();
    }

    // Destroy -> logout
    public function destroy ()
	{
		auth()->logout();

		return redirect()->home();
	}
}
