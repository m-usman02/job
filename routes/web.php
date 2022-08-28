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
    return view('auth.login');
});

Route::get('/db', function () {
    return view('auth.login');
});

require __DIR__.'/auth.php';

Route::get('job-search',[App\Http\Controllers\JobController::class,'search'])->middleware(['auth'])->name('job.search');
Route::get('invoice/{job}',[App\Http\Controllers\JobController::class,'exportPdf'])->middleware(['auth'])->name('invoice');

// Route::get('customer-edit/{customer}',[App\Http\Controllers\JobController::class,'customerEdit'])->middleware(['auth'])->name('customer.edit');
  
Route::get('edit-profile',[App\Http\Controllers\ProfileController::class,'edit'])->middleware(['auth'])->name('profile.edit');

Route::post('update-profile',[App\Http\Controllers\ProfileController::class,'update'])->middleware(['auth'])->name('profile.update');

// Route::post('customer-update/{customer}',[App\Http\Controllers\JobController::class,'customerUpdate'])->middleware(['auth'])->name('customer.update');


Route::resource('job',App\Http\Controllers\JobController::class)->middleware(['auth'])->names('job');
