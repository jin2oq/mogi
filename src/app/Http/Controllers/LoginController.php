<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
        return redirect('/');
        }

        return back()->withErrors([
        'login' => 'メールアドレスまたはパスワードが違います'
        ]);

    }
}
