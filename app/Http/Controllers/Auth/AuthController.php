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
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function doLogin(Request $request)
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

    public function create(array $data)
    {
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=> Hash::make($data['password']),
            'is_admin'=>'0'
        ]);
    }

    public function doRegister(StoreUserRequest $request)
    {
        $request->validated();

        $user = $this->create($request->all());

        event(new Registered($user));

        return redirect()->route('home');
    }

    public function logOut(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login.request');
    }
}
