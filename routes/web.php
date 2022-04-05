<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout/index');
});
Route::get('/master', function () {
    return view('layout/master');
});
Route::get('/Skill', function () {
    return view('Skill');
});
Route::get('/profile', function () {
    return view('layout/profile');
});
Route::get('/login', function () {
    return view('layout/login');
});
Route::get('/listJob', function () {
    return view('layout/listJob');
});
Route::get('/Experince', function () {
    return view('Experince');
});
Route::get('/Eduction', function () {
    return view('Eduction');
});
Route::get('/decjop', function () {
    return view('layout/decjop');
});
Route::get('/dashboardPro', function () {
    return view('dashboardPro');
});
Route::get('/Course', function () {
    return view('Course');
});
Route::get('/connect', function () {
    return view('layout/connect');
});
Route::get('/company', function () {
    return view('layout/company');
});
Route::get('/account', function () {
    return view('layout/account');
});
Route::get('/Aboutus', function () {
    return view('layout/Aboutus');
});

