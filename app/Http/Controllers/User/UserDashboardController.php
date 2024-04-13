<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function showuserDashboard(Request $request)
    {

        // $employee = Auth::user();
        return view('user.userDashboard');
    }
    public function showleaveRequestpage()
    {
        return view('user.leaveapply');
    }
    public function showleaveRequestform()
    {
        return view('user.leave_form');
    }
    public function leaveregitser()
    {
        $validated = request()->validate([
            "employeeid" => "required",
            "name" => "required",
            "reason" => "required",
            "from" => "required",
            "to" => "required",
            "descp" => "required",
            "status" => "required"
        ]);
    }
}
