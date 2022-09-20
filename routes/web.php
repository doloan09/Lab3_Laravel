<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\ResetPassController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

//Route::get('/', [\App\Http\Controllers\CustomCrawlerController::class, 'fetchContent']);
///Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show'); // danh sach bai viet theo theo loai
Route::get('/articles/{slug}', [ArticlesController::class, 'show'])->name('articles.show'); // chi tiet 1 bai viet
//Route::get('/articles/{slug}', [ArticlesController::class, 'show'])->name('articles.show')->middleware('auth', 'verify');

//Login - logout (User)
Route::get('/login', [AuthController::class, 'loginRequest'])->name('login.request'); // hien thi view login
Route::get('/register', [AuthController::class, 'registerRequest'])->name('register.request'); // hien thi view sign in
Route::post('/login', [AuthController::class, 'login'])->name('login'); // login
Route::post('/register', [AuthController::class, 'register'])->name('register'); //sign in
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

///Login gg
Route::get('/login/google/redirect', [AuthController::class, 'redirectToGoogle'])->name('login.google.redirect');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

///Login fb
Route::get('/login/facebook/redirect', [AuthController::class, 'redirectToFacebook'])->name('login.facebook.redirect');
Route::get('/login/facebook/callback', [AuthController::class, 'handleFacebookCallback'])->name('login.facebook.callback');

/// email verify
Route::get('/email/verify', [VerifyEmailController::class, 'verifyEmailNotice'])->middleware('auth')->name('verification.notice'); // hien thi view verify email de co the yeu cau cap lai email xac minh
Route::post('/email/verification-notification', [VerifyEmailController::class, 'verifySend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send'); // gui lai mail xac minh
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify'); // xu ly xac thuc email khi user click vao link trong email xac thuc

/// forgot password
Route::get('/forgot-password', [ResetPassController::class, 'showForgotPass'])->middleware('guest')->name('password.request'); // view forgot pass
Route::post('/forgot-password', [ResetPassController::class, 'forgotPass'])->middleware('guest')->name('password.email'); // gui mail kem link de reset pass
Route::get('/reset-password/{token}', [ResetPassController::class, 'showResetPass'])->middleware('guest')->name('password.reset'); // view reset pass
Route::post('/reset-password', [ResetPassController::class, 'resetPass'])->middleware('guest')->name('password.update'); // reset pass

// auth Admin: crud user
Route::group([
    'prefix' => 'auth/admin',
//    'middleware' => ['auth', 'verified']
    'middleware' => ['auth']
], function () {
    Route::get('/users', [UserController::class, 'index'])->name('auth.admin.users.index'); // view list user
    Route::get('/users/create', [UserController::class, 'create'])->name('auth.admin.users.create'); // view create user
    Route::post('/users', [UserController::class, 'store'])->name('auth.admin.users.store'); //insert user
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('auth.admin.users.edit'); // view update
    Route::post('/users/{user}', [UserController::class, 'update'])->name('auth.admin.users.update'); //update user
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('auth.admin.users.destroy'); //delete user
});

