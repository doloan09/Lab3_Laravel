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
use Laravel\Socialite\Facades\Socialite;

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
            return redirect()->route('home');
        }

        return redirect()->route('login.request')->with('message', 'Login detail are not found!');
    }

    public function register(StoreUserRequest $request)
    {
        $request->validated();

        $user = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin'=>'0',
        ]);

        event(new Registered($user));

        // login
        $req = $request->only('email', 'password');
        Auth::attempt($req);

        return redirect()->route('home')->with('message', 'Bạn đã đăng ký tài khoản thành công! Vui lòng kiểm tra email để xác thực tài khoản của bạn.');
    }

    /// Login fb, gg
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $ggUser = Socialite::driver('google')->stateless()->user();

        $userCheck = User::where('email', $ggUser->email)->first();

        if ($userCheck){
            Auth::login($userCheck);

            return redirect('/home');
        }

        // $user->token
        $user = User::updateOrCreate([
            'google_id' => $ggUser->id,
        ], [
            'name' => $ggUser->name,
            'email' => $ggUser->email,
            'password' => '',
            'is_admin' => '0',
            'google_token' => $ggUser->token,
            'google_refresh_token' => $ggUser->refreshToken,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/home')->with('message', 'Bạn đã đăng nhập thành công! Vui lòng kiểm tra email để xác thực tài khoản của bạn!');
    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(){
        $githubUser = Socialite::driver('facebook')->stateless()->user();

        $userCheck = User::where('email', $githubUser->email)->first();

        if ($userCheck){
            Auth::login($userCheck);

            return redirect()->route('home');
        }

        // $user->token
        $user = User::updateOrCreate([
            'facebook_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => '',
            'is_admin' => '0',
            'facebook_token' => $githubUser->token,
            'facebook_refresh_token' => $githubUser->refreshToken,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('home')->with('message', 'Bạn đã đăng nhập thành công! Vui lòng kiểm tra email để xác thực tài khoản của bạn!');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
