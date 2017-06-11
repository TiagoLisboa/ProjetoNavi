<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    
    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['resetAuthenticated', 'getResetAuthenticatedView']);
        $this->middleware('guest')->except(['resetAuthenticated', 'getResetAuthenticatedView']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getResetAuthenticatedView(Request $request)
    {
        return view('auth.passwords.reset');
    }

    /**
     * Reset password for logged in users.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resetAuthenticated(Request $request)
    {
        $this->validate($request, ['password' => 'required|confirmed|min:6']);

        $credentials = $request->only('password', 'password_confirmation');

        $credentials['email'] = auth()->user()->email;

        $user = auth()->user();
        $user->update(['password' => bcrypt($credentials['password'])]);
        
        return $user->save() ? $this->sendResetResponse(Password::PASSWORD_RESET)
                             : 'Error';
    }

    /**
     * Used by the ResetsPasswords trait.
     *
     * @param $user
     * @param $password
     */
    protected function resetPassword($user, $password)
    {
        $user->password = bcrypt($password);

        $user->save();

        auth()->guard($this->getGuard())->login($user);
    }
}