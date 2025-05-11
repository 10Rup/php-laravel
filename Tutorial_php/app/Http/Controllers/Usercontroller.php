<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class Usercontroller extends Controller
{
    function getUser(){
        return "Rup Kumar Mandal";
    }

    function aboutUser(){
        return "About Rony User.";
    }

    function paramUser($user){
        return "User given name is - ".$user;
    }

    function getuserpage(){
        return view('users');
    }

    function setusername($userName){
        return view('getname', ['name'=>$userName]);
    }

    function adminLogin(){
        return view('admin.login');
    }

    // checking it the view exist before loading the view
    function adminSign(){
        if(View::exists('adminSignup')){
            return view("adminSignup");
        }else{
            echo "Page not found";
        }
    }

    function addUser(Request $request){
        echo "new user add function called<br>";
        echo "Checking validation";
        $request->validate([
            'username'=>'required|string',
            'email'=>'required|email',
            'city'=>'required|uppercase',
        ],
        [
            'username.required'=>'Name is mendatory',
            'email.required'=>'Email is mendatory',
            'email.email'=>"Email is not valid",
            'city.required'=>'City is mendatory',
        ]);
        echo "Name - $request->username";
        echo "<br>Email -  $request->email";
        echo "<br>City -  $request->city";
    }


    function saveData(Request $request){
        // echo $request;
        echo $request->age;
        foreach ($request->skill as $skill){
            echo "$skill<br>";
        }
    }


}
