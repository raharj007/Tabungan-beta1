<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    //protected $username = 'username';
    protected $redirectTo = '/userAdmin';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function authenticated($request, $user)
    {
        if($user->status)
        {
            return redirect()->intended('/userAdmin');
        }
        return redirect()->intended('/userBiasa');
    }
}
