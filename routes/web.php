<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

// Route::group(['middleware' => 'guest'], function () {

// });



//Admin login
Route::get('/', [AdminController::class, 'showLoginForm'])->name('login');

Route::post('/', [AdminController::class, 'login']);


//Admin register
Route::get('/signup', [AdminController::class, 'showSignupForm'])->name('signup');

Route::post('/signup', [AdminController::class, 'signup']);


//Dashboard
Route::get('/dashboard', [DashboardController::class, 'DashboardShow'])->name('dashboard');

Route::get('/employee', [DashboardController::class, 'employeeshow'])->name('employee');


//Employee Register by admin
Route::get('/employee_signup', [DashboardController::class, 'ShowEmployeeSignUpForm'])->name('emp_signup');

Route::post('/employee_signup', [DashboardController::class, 'employeeRegister']);


//Delete existing employee
Route::get('/employee/{id}/delete', [DashboardController::class, 'DeleteEmployee'])->name('delete_Emp');

//Edit existing employee
Route::get('/employee/{id}/edit', [DashboardController::class, 'EditEmployee'])->name('edit_Emp');

Route::put('/employee/{id}/edit', [DashboardController::class, 'UpdateEmployee'])->name('update_Emp');
