<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\CustomSearchController;

use App\Http\Controllers\EmployeeformController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\WeekDataController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('demo', function () {
    return view('demo');
});

Route::get('sample', function () {
    return view('sample');
});



Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('employee', function () {
    return view('employee');
});


Route::get('onboard', function () {
    return view('onboard');
});

Route::get('details', function () {
    return view('details');
});

Route::get('contract', function () {
    return view('contract');
});

Route::get('contract_form', function () {
    return view('contract_form');
});

Route::get('personal', function () {
    return view('personal');
});

Route::get('/employee', [EmployeController::class, 'index']);



Route::get('login',[AdminController::class, 'index']);




Route::post('/logout', [LogoutController::class, 'store']) ->name('logout');


Route::get('/', [LoginController::class, 'index']) ->name('login');
Route::post('/', [LoginController::class, 'redirectTo']);


Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register', [RegisterController::class, 'store']);




Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('/superadmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superadmin')->middleware('auth');


Route::resource('/form', EmployeeformController::class);

Route::resource('/depts', DeptController::class);

Route::resource('/attendances', AttendanceController::class);
Route::post('/attendances', [WeekDataController::class, 'search']);

Route::get('/sample', [TimesheetController::class, 'index']);
Route::post('/sample', [TimesheetController::class, 'store']);

