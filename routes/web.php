<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\ResetPassController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [PageController::class, 'index'])->name('home')->middleware(['auth', 'verified']);
Route::get('/list-news/{name}', [PostController::class, 'listNews']);
Route::get('/list-news/{name}/{item}', [PostController::class, 'show']);

//Login - logout (User)
Route::get('/login', [AuthController::class, 'login'])->name('login.request');
Route::get('/register', [AuthController::class, 'register'])->name('register.request');
Route::post('/login', [AuthController::class, 'doLogin'])->name('login');
Route::post('/register', [AuthController::class, 'doRegister'])->name('register');
Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');

/// email verify
Route::get('/email/verify', [VerifyEmailController::class, 'verifyEmailNotice'])->middleware('auth')->name('verification.notice');
Route::post('/email/verification-notification', [VerifyEmailController::class, 'verifySend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');

/// forgot password
Route::get('/forgot-password', [ResetPassController::class, 'viewForgotPass'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ResetPassController::class, 'forgotPass'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [ResetPassController::class, 'viewResetPass'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPassController::class, 'resetPass'])->middleware('guest')->name('password.update');

// auth Admin: crud user
Route::group([
    'prefix' => 'auth/admin',
], function () {
    Route::get('/list-user', [UserController::class, 'index'])->name('auth-admin.list-user'); // view list user
    Route::get('/register', [UserController::class, 'create'])->name('auth-admin.register.request'); // view create user
    Route::post('/register', [UserController::class, 'store'])->name('auth-admin.register'); //insert user
    Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('auth-admin.edit-user'); // view update
    Route::post('/update-user/{id}', [UserController::class, 'update'])->name('auth-admin.update-user'); //update user
    Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('auth-admin.delete-user'); //delete user
});


