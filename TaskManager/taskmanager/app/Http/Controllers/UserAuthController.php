<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class UserAuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->username)->first();
        // echo $request->username;
        if($user){
            Auth::login($user);
            $request->session()->regenerate();
            // return redirect()->intended('user.profile');
            return view('user.profile', ['user' => $user, 'request' => $request]);
        }
        return back()->withErrors([
            'username' => 'Invalid User'
        ]);
    }
}
