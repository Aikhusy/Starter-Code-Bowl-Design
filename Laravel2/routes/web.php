<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('layouts.adminSkeleton');
});

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot', function () {
    return view('auth.forgot');
})->name('forgot');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');



