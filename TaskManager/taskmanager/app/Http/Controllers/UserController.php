<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function registration(){
        return view('registration');
    }


    public function show(){
        $users = User::all();
        return view('home',['users' => $users]);
    }

    public function create(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        // Mail::to("rupmandal10@gmial.com")->send(new NewUserWelcomeMail($user));
        return redirect()->route('home');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        
        return view('edit', ['user' => $user]);
    }


    public function update(Request $request,$id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('home');
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('home');
    }
}
