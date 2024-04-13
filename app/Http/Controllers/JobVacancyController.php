<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    public function Jobvacancyshow()
    {
        return view('admin.jobVacancy');
    }

    // public function showJobPostForm()
    // {
    //     return view('admin.postjob');
    // }
    public function createnewjob()
    {
        $validate = request()->validate([
            'job_title' => 'required|min:3',
            'job_description' => 'required|min:3',
            'experience' => 'required|min:3',
            'location' => 'required|min:3',
            'vacancy' => 'required|min:1',
        ]);
        $job = Vacancy::create([
            'job_title' => $validate['job_title'],
            'job_description' => $validate['job_description'],
            'experience' => $validate['experience'],
            'location' => $validate['location'],
            'no_of_vacancy' => $validate['vacancy'],
        ]);
        return redirect()->route('job')->with('success', 'New Job Posted Successfully.!');
    }
}
