<?php

use Illuminate\Support\Facades\Route;



require __DIR__ . '/admin.php';

// Route::get('/', function () {
//     return redirect()->route('admin.dashboard');
// });
Route::fallback(function () {
    return redirect()->route('admin.dashboard');
});

