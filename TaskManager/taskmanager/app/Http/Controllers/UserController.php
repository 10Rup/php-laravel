<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    public function registration(){
        return view('registration');
    }


    public function show(){
        $user = User::all();
        return view('home',['users' => $user]);
    }

    public function create(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->route('home');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return $user;
    }
}
