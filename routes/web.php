<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\UserAccountController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function(){
Route::get('admin/dashboard', [Homecontroller::class,'index']);
Route::get('/admin/userAccount', [UserAccountController::class, 'index'])->name('admin/userAccount');
Route::get('/admin/userAccount/create', [UserAccountController::class, 'create'])->name('admin/userAccount/create');
Route::post('/admin/userAccount/save', [UserAccountController::class, 'save'])->name('admin/userAccount/save');
Route::get('/admin/userAccount/edit/{id}', [UserAccountController::class, 'edit'])->name('admin/userAccount/edit');
Route::put('/admin/userAccount/edit/{id}', [UserAccountController::class, 'update'])->name('admin/userAccount/update');
Route::get('/admin/userAccount/delete/{id}', [UserAccountController::class, 'delete'])->name('admin/userAccount/delete');
});

require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [Homecontroller::class,'index']);

