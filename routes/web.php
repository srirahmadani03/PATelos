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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dataproject', function () {
    return view('dataproject');
});

Route::get('/technologi', function () {
    return view('technologi');
});

Route::get('/economic', function () {
    return view('economic');
});

Route::get('/legal', function () {
    return view('legal');
});

Route::get('/operational', function () {
    return view('operational');
});
Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/summary', function () {
    return view('summary');
});