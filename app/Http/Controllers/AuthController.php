<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $maxAttempts = 3; // Default is 5
    protected $decayMinutes = 15; // Default is 1
    // needs to be reviewed
    public function viewLogin()
    {
        return view('admin.auth.loginView');
    }


    public function login(AuthRequest $request)
    {
        $remember = $request->input('remember') && $request->remember == 1 ? $request->remember : 0;

        if (auth()->guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return back();
        } else {

            return back()->withInput()->withErrors(['email' => 'خطأ في البريد الإلكتروني أو كلمة المرور']);
        }
    }
    public function logout(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return back();
    }

    public function home()
    {
        return view('admin.home.index');
    }
}

