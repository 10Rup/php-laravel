<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginPage(){
        return view('auth.login');
    }

    public function login(Request $request){
        $user = User::where('email', $request->username)->first();
        if($user){
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'login' => 'Invalid User'
        ]);

    }

    public function dashboard(Request $request) {
        
        return view('auth.dashboard',['request' => $request]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login-page');
    }
}
