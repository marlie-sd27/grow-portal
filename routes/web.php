<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentRegistrationFormController;

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

Route::get('/', function () {
    return view('welcome');
});

// login routes
Route::get('signin', [LoginController::class, 'signin'])->name('login');
Route::get('callback', [LoginController::class, 'callback']);
Route::get('signout', [LoginController::class, 'signout'])->name('signout');


// Student Registration Form routes
Route::resource('registration', StudentRegistrationFormController::class);



// must be logged in to access routes
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
});


