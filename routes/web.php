<?php

use App\Http\Controllers\displayController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\serviceController;
use App\Http\Controllers\Admin\hairstyleController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\appointmentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [displayController::class, "index"]);

Auth::routes();

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(
    function() {
        Route::get('/', [dashboardController::class, "index"]);
        Route::resource('dashboard', dashboardController::class);
        Route::resource('categories', categoryController::class);
        Route::resource('services', serviceController::class);
        Route::resource('hairstyles', hairstyleController::class);
        Route::resource('appointments', appointmentController::class);
    }
);

