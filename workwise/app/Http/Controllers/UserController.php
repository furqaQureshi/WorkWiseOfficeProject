<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create()
    {
        return view('layouts.signin');
    }
    public function sign_in(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            Session::put('name', $request->name);
            return redirect('/jobs');
        } else {
            return "UserName And Passsowrd Not Match....";
        }
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}
