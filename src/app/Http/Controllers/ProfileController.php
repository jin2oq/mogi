<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->name) {
        $user->name = $request->name;
        }

        if ($request->email) {
        $user->email = $request->email;
        }

        if ($request->postal_code) {
        $user->postal_code = $request->postal_code;
        }

        if ($request->prefecture) {
        $user->prefecture = $request->prefecture;
        }

        if ($request->city) {
        $user->city = $request->city;
        }

        if ($request->address_line) {
        $user->address_line = $request->address_line;
        }

        if ($request->building !== null) {
        $user->building = $request->building;
        }

        $user->save();

        return redirect('/profile')->with('message', '更新しました');
    }
}
