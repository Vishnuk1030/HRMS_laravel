<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveRequestController extends Controller
{
    public function approve($id)
    {
        $data = Leave::find($id);
        $data->status = 'approved';
        $data->save();

        return redirect()->back()->with('success', 'Leave Approved Successfully');
    }
    public function reject($id)
    {
        $data = Leave::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect()->back()->with('success', 'Leave Rejected Successfully .!');
    }
}
