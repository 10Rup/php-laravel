<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// })->name('home');


Route::get('/user-signup-page', function () {
    return view('registration');
})->name('signup');

// Route::get('/user/SignUp', [UserController::class, 'registration'])->name('add-user');




Route::prefix('/user')->group(function () {
    // Route::get('/', [UserController::class, 'show'])->name('show-users');
    Route::post('/create', [UserController::class, 'create'])->name('create-user');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit-user');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('update-user');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete-user');
});

Route::get('/', [UserController::class, 'show'])->name('home');
// Route::get('/sing-in-page',[UserAuthController::class, 'showLoginPage'])->name('login-page');

// Route::get('/profile', function() {
//     $user = Auth::user();
//     return view('user.profile', ['userdata' => $user]);
// })->name('user.profile');
// Route::get('/profile', [UserAuthController::class, 'loginV2'])->name('user.profile');
// Route::get('/profile', [UserAuthController::class, 'loginV2'])->name('user.profile')->middleware('auth');
// Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');


Route::get("/login",[AuthController::class, 'showLoginPage'])->name('login-page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth.custom')->group(function (){
    Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
