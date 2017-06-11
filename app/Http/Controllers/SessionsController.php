<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    // Create -> open login view
    public function create ()
    {
    	return view('sessions.create');
    }

    // Store -> login

    // Destroy -> logout
}
