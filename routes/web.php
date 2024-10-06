<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\AdminDocController;
use App\Http\Controllers\AdminKriController;
use App\Http\Controllers\AdminPenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dokumenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KrisanController;
use App\Http\Controllers\PengurusController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/pengurus', App\Http\Controllers\PengurusController::class);

Route::resource('/dokumen', App\Http\Controllers\dokumenController::class);

Route::resource('/krisan', App\Http\Controllers\KrisanController::class);

Route::resource('/dashhboard', App\Http\Controllers\DashboardController::class);

Route::resource('/adminDashhboard', App\Http\Controllers\DashboardController::class)->middleware(['auth','admin']);

Route::resource('/adminPengurus', App\Http\Controllers\AdminPenController::class)->middleware(['auth','admin']);

Route::resource('/adminDokumen', App\Http\Controllers\AdminDocController::class)->middleware(['auth','admin']);

Route::resource('/adminKrisan', App\Http\Controllers\AdminKriController::class)->middleware(['auth','admin']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('adminLayout',[App\Http\Controllers\HomeController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminPengurus',[App\Http\Controllers\AdminPenController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminDokumen',[App\Http\Controllers\AdminDocController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminKrisan',[App\Http\Controllers\AdminKriController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminDashhboard',[App\Http\Controllers\adminDashboardController::class,'index'])->middleware(['auth','admin']);

require __DIR__.'/auth.php';

