<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\LeaveRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserDashboardController;

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


Route::group(['middleware' => 'auth.dashboard'], function () {
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'DashboardShow'])->name('dashboard');

    Route::get('/employee', [DashboardController::class, 'employeeshow'])->name('employee');

    Route::get('/job_vacancy', [JobVacancyController::class, 'Jobvacancyshow'])->name('job');


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


// create a new job vacany
Route::get('/newjob_post', [JobVacancyController::class, 'showJobPostForm'])->name('job_post');

Route::post('/newjob_post', [JobVacancyController::class, 'createnewjob']);

//leave request
Route::get('/leave_request',[LeaveRequestController::class,'leaveRequestshow'])->name('leave');


//User Login
Route::get('/user_login',[UserController::class,'showUserLoginForm'])->name('user_login');

Route::post('/user_login',[UserController::class,'login']);

//user Dashboard
 Route::get('/userdashboard',[UserDashboardController::class,'showuserDashboard'])->name('user_dashboard');

//user Logout
Route::get('/user_logout',[UserController::class,'userlogout'])->name('user_logout');

//user leave apply
Route::get('/leave_apply',[UserDashboardController::class,'showleaveRequestpage'])->name('user_leave');



//leaveRegister

Route::get('/leave_request',[UserDashboardController::class,'showleaveRequestform'])->name('user_leave_form');

Route::post('/leave_request', [UserDashboardController::class, 'leaveregitser']);
