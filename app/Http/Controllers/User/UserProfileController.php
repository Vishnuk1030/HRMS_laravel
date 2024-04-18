<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function showprofile()
    {
        return view('user.user_profile');
    }
    public function updateprofile(Request $request)
    {
        $validated = $request->validate([
            'employeeid' => 'required',
            'name' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'position' => 'required',
            'place' => 'required',
        ]);


        $employeeid = $validated['employeeid'];
        $name = $validated['name'];
        $email = $validated['email'];
        $designation = $validated['designation'];
        $position = $validated['position'];
        $place = $validated['place'];
        // do the same for everything else..
        // echo $name;

        DB::table('employee_regi')
            ->where('id', '=', Auth::guard('employee')->user()->id)
            ->update([
                'employee_id' => $employeeid,
                'name' => $name,
                'email' => $email,
                'designation' => $designation,
                'position' => $position,
                'place' => $place,
            ]);

        return redirect()->route('user_dashboard')->with('success','Profile Updated Successfully..!');
    }
}
