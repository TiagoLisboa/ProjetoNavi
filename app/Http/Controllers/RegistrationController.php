<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    // Create -> registration view
    public function create ()
    {
    	return view('registration.create');
    }

    // Store -> validade and store on database -> login -> rediret to home


}
