<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/register-user', function(){
//     return "add new users";
// })->name('newuser');

Route::view('registration');
