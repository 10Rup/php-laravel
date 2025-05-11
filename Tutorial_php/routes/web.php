<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function () {
    return view("home");
});
Route::get("/about", function(){
    return view('about');
});


Route::view("home/profile/user", 'nameSpace')->name('users');




Route::view("/ref", "refrence");
Route::view("/ref2", "refrence2v");

// short method
// Route::view("/home", "home");

// redirecting
// route::redirect('/home', '/');

// sending parameters
Route::get('/testparam/{name}', function($name){
    echo $name;
    return view('test_param', ['username'=>$name]);
});


// using controllers in routes
Route::get("username", [Usercontroller::class, "getUser"]);
Route::get("aboutuser", [Usercontroller::class, "aboutUser"]);
// using param valuse
Route::get("givenname/{user}", [Usercontroller::class, "paramUser"]);

// calling page through controller
Route::get('userpage', [Usercontroller::class, "getuserpage"]);
Route::get('getUserName/{userName}', [Usercontroller::class, 'setusername']);

// showing nested view through controller
Route::get("admin", [Usercontroller::class, 'adminLogin']);

Route::get('adminSignup', [Usercontroller::class, 'adminSign']);

Route::view('admin/form', 'formview');

// add user form
Route::post('admin/add-user', [Usercontroller::class,'addUser']);

Route::post("admin/save-data", [Usercontroller::class,'saveData']);


// using prefix route
Route::prefix('student')->group(function(){
    Route::view('/home', 'home');
    Route::view('/show','show');
    Route::view('/add', 'add');
});