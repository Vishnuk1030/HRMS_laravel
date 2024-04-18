<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function DashboardShow()
    {
        $admin = Auth::user();
        $admincount = Admin::count();
        $empcount = Employee::count();
        $leavecount = Leave::count();
        $job = Vacancy::count();
        return view('admin.dashboard', compact('empcount', 'job', 'admin', 'admincount', 'leavecount'));
    }
    public function employeeshow()
    {
        $employees = Employee::paginate(6);
        return view('admin.employee', compact("employees"));
    }
    public function ShowEmployeeSignUpForm()
    {
        return view('admin.employeeReg');
    }
    public function employeeRegister()
    {
        $validate = request()->validate([
            'employeeid' => 'required|min:3|max:25',
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'gender' => 'required',
            'place' => 'required|min:3|max:25',
            'designation' => 'required|min:3|max:25',
            'position' => 'required|min:3|max:25',
            'salary' => 'required|min:3|max:25',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password|min:6',
        ]);
        $user = Employee::create([
            "employee_id" => $validate["employeeid"],
            "name" => $validate["name"],
            "email" => $validate["email"],
            "gender" => $validate["gender"],
            "place" => $validate["place"],
            "designation" => $validate["designation"],
            "position" => $validate["position"],
            "salary" => $validate["salary"],
            "password" => Hash::make($validate["password"]),
            "confirmpassword" => Hash::make($validate["confirmpassword"]),
        ]);


        return redirect()->route('employee')->with('success', 'New Employee sign up Succsessfully.!');
    }
    public function DeleteEmployee(Employee $id)
    {
        $id->delete();
        return redirect()->route('employee')->with('success', 'Employee deleted Successfully.!');
    }
    public function EditEmployee($id)
    {
        $employee = Employee::findOrFail(decrypt($id));
        return view('admin.EditEmployee', compact('employee'));
    }

    public function UpdateEmployee(Request $request, $id)
    {
        $request->validate([
            'employeeid' => 'required|min:3|max:25',
            'name' => 'required|min:3|max:25',
            'email' => 'required',
            'gender' => 'required',
            'place' => 'required|min:3|max:25',
            'designation' => 'required|min:3|max:25',
            'position' => 'required|min:3|max:25',
            'salary' => 'required|min:3|max:25',
        ]);
        Employee::findOrFail($id)->update([
            "employee_id" => $request->employeeid,
            "name" => $request->name,
            "email" => $request->email,
            "gender" => $request->gender,
            "place" => $request->place,
            "designation" => $request->designation,
            "position" => $request->position,
            "salary" => $request->salary,
        ]);
        return redirect()->route('employee')->with('success', 'Employee details Updated Successfully!.');
    }
    public function showLeaveAccept()
    {
        $leave_emp = Leave::paginate(6);
        return view('admin.leaveRequest', compact('leave_emp'));
    }
}
