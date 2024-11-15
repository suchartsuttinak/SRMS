<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// ADMIN'S ALL ROUTES
Route::controller(AdminController::class)->group(function(){
    Route::get('admin/logout', 'AdminLogout')->name('admin.logout');
    Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
    Route::post('admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
    Route::get('admin/password/change', 'AdminPasswordChange')->name('admin.password.change');
   
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';