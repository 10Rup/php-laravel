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

            if($user->role == 'admin'){
                return redirect()->intended('admin/dashboard');
            }
            elseif($user->role == 'user'){
                return redirect()->intended('user/dashboard');
            }
            else{
                return redirect()->intended('home');
            }

            
        }
        return back()->withErrors([
            'login' => 'Invalid User'
        ]);

    }

    public function adminDashboard(Request $request) {
        $userList = User::all();
        return view('auth.dashboard',['request' => $request, 'users' => $userList]);
    }

    public function userDashboard(Request $request) {
        
        return view('user.dashboard',['request' => $request]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login-page');
    }
}
