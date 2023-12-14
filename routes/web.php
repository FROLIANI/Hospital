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
Route::get('/',[HomeController::class,'redirect']);


//For  login and Register
Route::get('/login', [HomeController::class,'login']);
Route::get('/register', [HomeController::class, 'register']);

//User dashbord
Route::get('/user', [HomeController::class, 'user']);

//ThisAdmin Dashboard
Route::get('/admin', [HomeController::class, 'admin']);

//This Admin Dashboard
Route::get('/add_doctor_view', [AdminController::class, 'addview']);

//Upload doctor
Route::get('/upload_doctor',[AdminController::class, 'upload']);


Route::post('/appointment',[HomeController::class, 'appoint']);

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
