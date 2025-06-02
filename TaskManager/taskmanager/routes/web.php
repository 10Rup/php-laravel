<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'show'])->name('home');
Route::prefix('/user')->group(function () {
    // Route::get('/', [UserController::class, 'show'])->name('show-users');
    Route::post('/create', [UserController::class, 'create'])->name('create-user');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit-user');
});

