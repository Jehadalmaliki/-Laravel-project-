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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/Skill', function () {
    return view('Skill');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/listJob', function () {
    return view('listJob');
});
Route::get('/Experince', function () {
    return view('Experince');
});
Route::get('/Eduction', function () {
    return view('Eduction');
});
Route::get('/decjop', function () {
    return view('decjop');
});
Route::get('/dashboardPro', function () {
    return view('dashboardPro');
});
Route::get('/Course', function () {
    return view('Course');
});
Route::get('/connect', function () {
    return view('connect');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/Aboutus', function () {
    return view('Aboutus');
});
