<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.register');
    }

    public function signup()
    {
        //validating register form page
        $validate = request()->validate([
            "name" => "required|min:3|max:10",
            "email" => "required|email|unique:admins,email",
            "password" => "required|min:6",
            "cnf_password" => "required|same:password|min:6"
        ]);

        $user = Admin::create([
            "name" => $validate["name"],
            "email" => $validate["email"],
            "password" => Hash::make($validate["password"]),
            "cnf_password" => Hash::make($validate["cnf_password"]),
        ]);


        return redirect()->route('login')->with('success', 'Sign up SuccessFully.! Now you can login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {

        // login page validate
        $validated = request()->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ]);

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success',' Admin Logged In Successfully.!');
        }


        return redirect()->route('login')->withErrors([
            'password' => 'Invalid email or password'
        ]);
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged Out Successfully');
    }
}
