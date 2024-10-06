<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/users/list',function () {
//   return view('users.list');
//})->middleware(['auth'])->name('users.list');

Route::get('/users/list', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'store'])->name('users.store');

require __DIR__.'/auth.php';
