<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function __construct () 
	{
		$this->middleware('auth');
	}

    public function index ()
    {
    	return view ('users.index');
    }

    public function edit ()
    {
    	return view ('users.edit');
    }

    public function update ()
    {
        $this->validate(request(), [
            'name' => 'required'
            , 'email' => 'required|email'
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

        $user = User::find(request('id'));

        $user->update([
            'name' => request('name')
            , 'email' => request('email')
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

      return redirect()->home();
    }

    public function destroy ()
    {
        $user = User::find(request('id'));
        $user->delete();
        
        auth()->logout();

        return redirect()->route('welcome');
    }
}
