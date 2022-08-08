<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginRequest()
    {
        if (Auth::user()){
            return redirect()->route('home');
        }
        return view('auth/login');
    }

    public function registerRequest()
    {
        if (Auth::user()){
            return redirect()->route('home');
        }
        return view('auth/register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $req = $request->only('email', 'password');
        if (Auth::attempt($req)){
            return redirect()->route('auth-admin.list-user');
        }

        return redirect()->route('login.request')->with('message', 'Login detail are not found!');
    }

    public function register(StoreUserRequest $request)
    {
        $request->validated();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => '0'
        ]);

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        event(new Registered($user));

        return redirect()->route('home')->with('message', 'Bạn đã đăng ký tài khoản thành công! Vui lòng kiểm tra email để xác thực tài khoản của bạn.');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login.request');
    }
}
