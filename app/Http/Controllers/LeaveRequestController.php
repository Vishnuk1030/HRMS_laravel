<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveRequestController extends Controller
{
    public function leaveRequestshow()
    {
        return view('admin.leaveRequest');
    }
}
