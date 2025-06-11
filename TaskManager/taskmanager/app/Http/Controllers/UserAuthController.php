<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class UserAuthController extends Controller
{   

    public function showLoginPage(){
        return view('user.loginV2');
    }

    public function login(Request $request){
        $user = User::where('email', $request->username)->first();
        // echo $request->username;
        return $user;
        // if($user){
        //     Auth::login($user);
        //     $request->session()->regenerate();
        //     return redirect()->route('user.profile');
        // }
        // return back()->withErrors([
        //     'username' => 'Invalid User'
        // ]);
    }


    public function loginV1(Request $request){
        $user = User::where('email', $request->username)->first();
        if($user){
            Auth::login($user);
            $userData = Auth::user();
            $request->session()->regenerate();

            // if (Auth::check()) {
            //     dd('User is logged in: ' . Auth::user()->name);
            // } else {
            //     dd('Login failed to persist.');
            // }
            // $dataCheck = Auth::check();
            // return $dataCheck;
            return view('user.profile', ['userdata' => $userData, 'request' => $request]);
            // return redirect()->route('user.profile']);
        }
        return back()->withErrors([
            'username' => 'Invalid User'
        ]);


    }

        public function loginV2(Request $request){
        $user = User::where('email', $request->username)->first();
        if($user){
            Auth::login($user);
            $userData = Auth::user();
            $request->session()->regenerate();

            return view('user.profile', ['userdata' => $userData, 'request' => $request]);
        }
        return back()->withErrors([
            'username' => 'Invalid User'
        ]);


    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login-page');
        // return "logout successfull";
        // return redirect()->route('login');
    }
}
