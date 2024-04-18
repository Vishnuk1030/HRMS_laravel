<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Session;
use \Validator;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    public function showUserLoginForm()
    {
        return view('user.userlogin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user_dashboard')->with('success','User Logged in Successfully');
        } else {
            return redirect()->route('user_login')->withErrors(['password' => 'Invalid email or password']);
        }


    }


    public function userlogout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('user_login')->with('success', 'User Logged Out Successfully');
    }
}
