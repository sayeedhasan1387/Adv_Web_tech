<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/register', [RegistrationController::class, 'getForm']);
Route::post('/register', [RegistrationController::class, 'signUp']);
Route::get('/login', [LoginController::class, 'getForm']);
Route::post('/login', [LoginController::class, 'signIn']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
// Route::post('/updateprofile', [RegistrationController::class, 'signUp']);
Route::get('/updateprofile', [ProfileController::class, 'updateProfile']);
Route::get('/logout', [LoginController::class, 'logOut']);
Route::post('/updateprofile', [ProfileController::class, 'update']);
