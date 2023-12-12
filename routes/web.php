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

Route::get('/', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/homepage', [PageController::class, 'home'])->name('homepage');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/doctor', [PageController::class, 'servicesDoctor'])->name('doctor');
Route::get('/appointment', [PageController::class, 'servicesAppointment'])->name('appointment');
