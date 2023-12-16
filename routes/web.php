<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

//First route once loaded
Route::get('/', [HomeController::class, 'redirect']); //->middleware('auth','verified');

//For  login and Register
Route::get('/login', [HomeController::class, 'login']);
Route::get('/register', [HomeController::class, 'register']);

//User dashbord
Route::get('/user', [HomeController::class, 'user']);

//ThisAdmin Dashboard
Route::get('/admin', [HomeController::class, 'admin']);

//This Admin Dashboard
Route::get('/add_doctor_view', [AdminController::class, 'addview']);

//Upload doctor
Route::get('/upload_doctor', [AdminController::class, 'upload']);


Route::post('/appointment', [HomeController::class, 'appoint']);

Route::get('/myappointment', [HomeController::class, 'myappoint']);

Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancel_appointment']);

//Admin see appointments
Route::get('/show_appointments', [AdminController::class, 'showappointments']);

//Approve Appointment
Route::get('/approved/{id}', [AdminController::class, 'approved']);

//Cancel Appointment
Route::get('/canceled/{id}', [AdminController::class, 'canceled']);


//All Doctors
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

//Delete doctor
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

//Update doctor
Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);

//Update doctor
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);

//forgot password
Route::get('/forgot', [HomeController::class, 'forgot']);

//Confirm password
Route::post('/confirm', [HomeController::class, 'confirm']);


//Register user and fetch the data
Route::post('/login_user', [HomeController::class, 'login_user']);
Route::post('/register_user', [HomeController::class, 'register_user']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
