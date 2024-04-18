<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\LeaveRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => 'admin.auth'], function () {
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'DashboardShow'])->name('dashboard');

    Route::get('/employee', [DashboardController::class, 'employeeshow'])->name('employee');

    Route::get('/job_vacancy', [JobVacancyController::class, 'Jobvacancyshow'])->name('job');

    Route::get('/leave_accept', [DashboardController::class, 'showLeaveAccept'])->name('leave_accept');

    //Employee Register by admin
    Route::get('/employee_signup', [DashboardController::class, 'ShowEmployeeSignUpForm'])->name('emp_signup');

    Route::post('/employee_signup', [DashboardController::class, 'employeeRegister']);


    //Delete existing employee
    Route::get('/employee/{id}/delete', [DashboardController::class, 'DeleteEmployee'])->name('delete_Emp');


    //Edit existing employee
    Route::get('/employee/{id}/edit', [DashboardController::class, 'EditEmployee'])->name('edit_Emp');

    Route::put('/employee/{id}/edit', [DashboardController::class, 'UpdateEmployee'])->name('update_Emp');
});




//Admin login
Route::get('/', [AdminController::class, 'showLoginForm'])->name('login');

Route::post('/', [AdminController::class, 'login']);


//Admin register
Route::get('/signup', [AdminController::class, 'showSignupForm'])->name('signup');

Route::post('/signup', [AdminController::class, 'signup']);

//admin logout
Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth')->name('logout');


// create a new job vacany by admin side
Route::get('/newjob_post', [JobVacancyController::class, 'showJobPostForm'])->name('job_post');

Route::post('/newjob_post', [JobVacancyController::class, 'createnewjob']);


//Complaint Handle in admin side

Route::get('/complaint_handle', [ComplaintController::class, 'showcomplainttable'])->name('complaint_handle');

Route::get('/complaint_solve/{id}', [ComplaintController::class, 'solve']);

Route::get('/complaint_reject/{id}', [ComplaintController::class, 'reject']);


// Route::group(['middleware' => 'user.auth'], function () {
// });

//user Dashboard
Route::get('/userdashboard', [UserDashboardController::class, 'showuserDashboard'])->name('user_dashboard');



//User Login
Route::get('/user_login', [UserController::class, 'showUserLoginForm'])->name('user_login');

Route::post('/user_login', [UserController::class, 'login']);


//user leave apply
Route::get('/leave_apply', [UserDashboardController::class, 'showleaveRequestpage'])->name('user_leave');

//Complaint register in user side
Route::get('/complaint_register', [ComplaintController::class, 'showcomplaintform'])->name('complaint_form');

Route::post('/complaint_register', [ComplaintController::class, 'registercomplaint']);


//user Logout
Route::get('/user_logout', [UserController::class, 'userlogout'])->name('user_logout');


//leaveRegister

Route::get('/leave_request', [UserDashboardController::class, 'showleaveRequestform'])->name('user_leave_form');

Route::post('/leave_request', [UserDashboardController::class, 'leaveregitser']);

//leave approve
Route::get('/approve_leave/{id}', [LeaveRequestController::class, 'approve']);

//leave Reject
Route::get('/reject_leave/{id}', [LeaveRequestController::class, 'reject']);

//User profile
Route::get('/profile', [UserProfileController::class, 'showprofile'])->name('user_profile');

Route::put('/profile_edit', [UserProfileController::class, 'updateprofile'])->name('user_profile_update');
