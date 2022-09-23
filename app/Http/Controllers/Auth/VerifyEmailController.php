<?php

namespace App\Http\Controllers\Auth;

use App\Events\SendLetter;
use App\Http\Controllers\Controller;
use App\Notifications\Greeting;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyEmailController extends Controller
{
    public function verifyEmailNotice(){
        return view('auth.verify-email');
    }

    public function verifySend(Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }

    public function verify(EmailVerificationRequest $request) {
        $request->fulfill();

//        Auth::user()->notify(new Greeting());
//        event(new SendLetter(Auth::user()));

        return redirect('/home')->with('message', 'Bạn đã xác minh tài khoản thành công!');
    }

}
