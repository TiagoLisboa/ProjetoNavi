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
    public function store ()
    {
    	$this->validate(request(), [
            'name' => 'required'
            , 'email' => 'required|email'
            , 'password' => 'required|confirmed'
            , 'cpf' => 'required|regex:([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})'
            , 'rg' => 'required|regex:([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[A-Za-z0-9]{1})'
            , 'birth' => 'required'
            , 'sex' => 'required'
            , 'address' => 'required'
            , 'neighbourhood' => 'required'
            , 'city' => 'required'
            , 'uf' => 'required|max:2'
            , 'cep' => 'required|regex:([0-9]{5}[\-]?[0-9]{3})'
            ]);

        $user = User::create([
            'name' => request('name')
            , 'email' => request('email')
            , 'password' => bcrypt(request('password'))
            , 'cpf' => request('cpf')
            , 'rg' => request('rg')
            , 'birth' => request('birth')
            , 'sex' => request('sex')
            , 'address' => request('address')
            , 'neighbourhood' => request('neighbourhood')
            , 'city' => request('city')
            , 'uf' => request('uf')
            , 'cep' => request('cep')
            ]);

      auth()->login($user);

      return redirect()->home();
    }


}
