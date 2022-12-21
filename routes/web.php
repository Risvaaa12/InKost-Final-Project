<?php

use Illuminate\Support\Facades\Route;
//memanggil file controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;


// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'first']);

Route::get('/landing', [HomeController::class, 'index']);

Route::get('/bookingpage', [BookingController::class, 'index']);

Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::resource('admin', AdminController::class);
});


Route::get('comunity/{id}', [AdminController::class,'comunity'])->name('package.comunity');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
