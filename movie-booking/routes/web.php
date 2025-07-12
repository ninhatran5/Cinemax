<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ClientAuthController;
// Admin Auth
use App\Http\Controllers\AdminAuthController;

Route::get('/admin', function () {
    return view('admin.login-admin');
});



Route::get('/login', [ClientAuthController::class, 'showLoginForm'])->name('client.login');
Route::post('/login', [ClientAuthController::class, 'login']);
Route::post('/register', [ClientAuthController::class, 'register'])->name('client.register');
Route::post('/logout', [ClientAuthController::class, 'logout'])->name('client.logout');

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/client', [MovieController::class, 'index']);




// Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'index']);
//     // Thêm các route quản trị khác ở đây
// });


// Route::get('/client', [MovieController::class, 'index'])->name('movies.index');
// Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
