<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
    	$data = $request->only('email', 'password');
    	if(\Auth::attempt($data)) {
    		//return 'Is Logged In';
    		return redirect()->intended('home');
    	}

    	return back()->withInput();
    }
}
