<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\AdminDocController;
use App\Http\Controllers\AdminKriController;
use App\Http\Controllers\AdminPenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KrisanController;
use App\Http\Controllers\PengurusController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('layout');
});

Route::get('/pengurus', [PengurusController::class,'index']);

Route::get('/dokumen', [DokumenController::class,'index']);

Route::prefix('krisan')->group(function () {
    // Create
    Route::get('/create', [KrisanController::class,'create']);
    Route::post('/', [KrisanController::class,'store'])->name('store');

    // Read
    Route::get('/', [KrisanController::class,'index']);
    Route::get('/{id}', [KrisanController::class,'show']);

    // Update
    Route::get('/{id}/edit', [KrisanController::class,'edit']);
    Route::patch('/{id}', [KrisanController::class,'update']);

    // Delete
    Route::delete('/{id}', [KrisanController::class,'destroy']);
});

Route::get('/dashhboard', [DashboardController::class,'index']);

Route::get('/adminDashhboard', [DashboardController::class,'index'])->middleware(['auth','admin']);

Route::get('/adminPengurus', [AdminPenController::class,'index'])->middleware(['auth','admin']);

Route::get('/adminDokumen', [AdminDocController::class,'index'])->middleware(['auth','admin']);

Route::get('/adminKrisan', [AdminKriController::class,'index'])->middleware(['auth','admin']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('adminLayout',[HomeController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminPengurus',[AdminPenController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminDokumen',[AdminDocController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminKrisan',[AdminKriController::class,'index'])->middleware(['auth','admin']);
Route::get('/adminDashhboard',[adminDashboardController::class,'index'])->middleware(['auth','admin']);

require __DIR__.'/auth.php';

