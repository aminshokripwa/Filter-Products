<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function changeUsername(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:8']
        ]);
        $user = auth()->user();
        $user->email = $request['username'];
        $user->save();
        return back()->with('success', 'username changed successfully');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|min:8|confirmed'
        ]);
        $user = auth()->user();
        if (Hash::check($request['password'], $user->password)){
            $user->password = bcrypt($request['new_password']);
            $user->save();
            return back()->with('success', 'password changed successfully');
        }
        return back()->with('failed', 'the password is incorrect');
    }
}
