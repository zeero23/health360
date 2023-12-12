<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/services', function () {
    return view('services');
});
=======
Route::get('/', [PageController::class, 'login'])->name('login');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/homepage', [PageController::class, 'home'])->name('homepage');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/doctor', [PageController::class, 'servicesDoctor'])->name('doctor');
Route::get('/appointment', [PageController::class, 'servicesAppointment'])->name('appointment');
>>>>>>> 8abab605cd2e814a8cac3d7f83621117e0f5ffc3
