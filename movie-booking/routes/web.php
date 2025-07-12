<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ClientAuthController;
// Admin Auth
use App\Http\Controllers\AdminAuthController;


Route::middleware([IsAdmin::class])->group(function () {});


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.login-admin');
    });
    Route::match(['get', 'post'], '/login', [AdminAuthController::class, 'login'])->name('admin.login');
    // Các route cần middleware IsAdmin
    Route::middleware([IsAdmin::class])->group(function () {
        // Route logout admin hoặc các route admin cần bảo vệ
        // Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});





// client

Route::get('/client', [MovieController::class, 'index']);
Route::get('/login', [ClientAuthController::class, 'showLoginForm'])->name('client.login');
Route::post('/login', [ClientAuthController::class, 'login']);
Route::post('/register', [ClientAuthController::class, 'register'])->name('client.register');
Route::post('/logout', [ClientAuthController::class, 'logout'])->name('client.logout');



// Route::get('/', function () {
//     return view('welcome');
// });
