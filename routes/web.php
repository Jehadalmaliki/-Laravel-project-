<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\CourseController;
use App\Http\Controllers\Client\EductionController;
use App\Http\Controllers\Client\ExperinceController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Client\SkillController;
use App\Http\Controllers\Client\SocialController;

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

Route::get('/profile', function () {
    return view('layout/profile');
});
Route::get('/login', function () {
    return view('layout/login');
});
Route::get('/listJob', function () {
    return view('layout/listJob');
});


Route::get('/decjop', function () {
    return view('layout/decjop');
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

Route::get('/Course', [CourseController::class, 'show'])->name('Course');
Route::get('/Eduction', [EductionController::class, 'show'])->name('Eduction');
Route::get('/Experince', [ExperinceController::class, 'show'])->name('Experince');
Route::get('/User', [UserController::class, 'show'])->name('User');
Route::get('/Skill', [SkillController::class, 'show'])->name('Skill');
Route::get('/Social', [SocialController::class, 'show'])->name('Social');
