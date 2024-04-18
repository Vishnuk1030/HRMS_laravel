<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function showuserDashboard(Request $request)
    {

        $pendingLeave = Leave::where('status', '=', 'pending')->where('name', '=', Auth::guard('employee')->user()->name)->get();
        $ApprovedLeave = Leave::where('status', '=', 'approved')->where('name', '=', Auth::guard('employee')->user()->name)->get();
        $RejectedLeave = Leave::where('status', '=', 'rejected')->where('name', '=', Auth::guard('employee')->user()->name)->get();
        return view('user.userDashboard', compact('pendingLeave', 'ApprovedLeave', 'RejectedLeave'));
    }
    public function showleaveRequestpage()
    {
        $leaves = Leave::where('name', '=', Auth::guard('employee')->user()->name)->paginate(5);
        return view('user.leaveapply', compact('leaves'));
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
        $leave = Leave::create([
            "employee_id" => $validated["employeeid"],
            "name" => $validated["name"],
            "reason" => $validated["reason"],
            "from" => $validated["from"],
            "to" => $validated["to"],
            "description" => $validated["descp"],
            "status" => $validated["status"],
        ]);
        return redirect()->route('user_leave')->with('success', 'Leave Application Submitted');
    }
}
