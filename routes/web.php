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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\PatientController::class, 'index'])->name('home');
Route::get('/create', [\App\Http\Controllers\PatientController::class, 'create'])->name('patient.create');

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('show.user');
Route::get('/user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('create.user');

Route::get('/oservation', [\App\Http\Controllers\PatientController::class, 'observation'])->name('observation');

// Route::get('patients', function () {
//     return view('');
// });

