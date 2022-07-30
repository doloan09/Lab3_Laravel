<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use \App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [PageController::class, 'index']);
Route::get('/list-news/{name}', [PostController::class, 'listNews']);
Route::get('/list-news/{name}/{item}', [PostController::class, 'show']);

//Login - logout (User)
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/doLogin', [AuthController::class, 'doLogin']);
Route::post('/doRegister', [AuthController::class, 'doRegister']);
Route::get('/logout', [AuthController::class, 'logOut']);

// auth Admin: crud user
Route::group([
    'prefix' => 'auth/admin',
], function () {
    Route::get('/list-user', [UserController::class, 'index']); // view list user
    Route::get('/register', [UserController::class, 'create']); // view create user
    Route::post('/register', [UserController::class, 'store']); //insert user
    Route::get('/edit-user/{id}', [UserController::class, 'edit']); // view update
    Route::post('/update-user/{id}', [UserController::class, 'update']); //update user
    Route::delete('/delete-user/{id}', [UserController::class, 'destroy']); //delete user
});

