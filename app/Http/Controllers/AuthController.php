<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;

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

    public function updateProfileView()
    {
        $update_route = 'profile.post';
        $record = auth()->user();
        return view('admin.profile.edit', compact('update_route', 'record'));
    }

    public function updateProfile(ProfileRequest $request)
    {
        $user = Auth::user();
        $user->update(Arr::except($request->validated(), ['old_password', 'new_password']));

        if ($request->input('old_password')) {
            if (Hash::check($request->input('old_password'), $user->password)) {
                $user->password = $request->input('new_password');
                $user->save();
            } else {
                return redirect()->back()->with('fail', 'حدث خطأ !');
            }
        }

        return redirect()->route('home')->with('success', 'تم التعديل بنجاح');
    }
}

