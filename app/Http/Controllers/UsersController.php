<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getLogin()
    {
        Auth::logout();
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/admin');
        }

        dd($request);

        return redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('product.index');
    }
}