<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function showcomplaintform()
    {
        return view('user.user_complaint');
    }
    public function registercomplaint(Request $request)
    {
        $validated = $request->validate([
            'employeeid' => 'required',
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $complaint = Complaint::create([
            "employee_id" => $validated['employeeid'],
            "name" => $validated['name'],
            "complaint_title" => $validated['title'],
            "complaint_description" => $validated['description']
        ]);

        return redirect()->route('user_dashboard')->with('success', 'Complaint Registered Successfully..!');
    }

    public function showcomplainttable()
    {
        $complaints = Complaint::paginate(5);
        return view('admin.complaint', compact('complaints'));
    }

    public function solve($id)
    {
        $data = Complaint::find($id);
        $data->status = 'solved';
        $data->save();

        return redirect()->back()->with('success', 'Complaint Solved Successfully.!');
    }
    public function reject($id)
    {
        $data = Complaint::find($id);
        $data->status = 'reject';
        $data->save();

        return redirect()->back()->with('success', 'Complaint Rejected Successfully.!');
    }
}
