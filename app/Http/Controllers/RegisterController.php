<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerAction(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'role' => $request->input('role'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            Session::flash('error', 'You have been registered');
            return redirect('/registration');
        }
    }
}
