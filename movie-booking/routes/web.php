<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/client', function () {
    return view('client/home');
});
Route::get('/login', function () {
    return view('client.block.login-register.login-register');
});
