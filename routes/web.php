<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/',[AdminController::class,'index'])->name('index');
Route::post('/store',[AdminController::class, 'store'])->name('store');
Route::middleware(AdminMiddleware::class)->group(function () {
Route::get('/adminPage',[AdminController::class, 'add'])->name('add');
Route::get('/show',[AdminController::class, 'show'])->name('show');
Route::get('/logged',[AdminController::class, 'logged'])->name('logged');
Route::get('/edit/{id}',[AdminController::class, 'edit'])->name('edit');
Route::post('/update/{id}',[AdminController::class, 'update'])->name('update');
Route::get('/delete/{id}',[AdminController::class, 'delete'])->name('delete');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
