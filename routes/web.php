<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/', [\App\Http\Controllers\PatientController::class, 'index'])->name('home');
Route::get('/create', [\App\Http\Controllers\PatientController::class, 'create'])->name('patient.create');

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('show.user');
Route::get('/user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('create.user');
Route::get('/user/export', [\App\Http\Controllers\UserController::class, 'exportUser'])->name('users.export');

Route::get('/oservation', [\App\Http\Controllers\PatientController::class, 'observation'])->name('observation');
Route::get('/observation/export', [\App\Http\Controllers\PatientController::class, 'observationExport'])->name('observation.export');


