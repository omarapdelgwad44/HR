<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.welcome');
    })->middleware('auth.admin')->name('admin.dashboard');
    Route::get('login', [LoginController::class, 'index'])->name('admin.login.show');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    // Setting
    Route::get('setting', [SettingController::class, 'index'])->name('admin.setting.index');
    Route::post('setting/update', [SettingController::class, 'update'])->name('admin.setting.update');
});


