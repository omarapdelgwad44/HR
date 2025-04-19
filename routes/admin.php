<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.welcome');
    })->middleware('auth.admin')->name('admin.dashboard');
    Route::get('login', [LoginController::class, 'index'])->name('admin.login.show');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
});


