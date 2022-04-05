<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\AdvertismentController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\EductionController;
use App\Http\Controllers\admin\ExperinceController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\roleController;
use App\Http\Controllers\admin\serviceController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\SkillController;

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
Route::get('/Advertisment', [AdvertismentController::class, 'show'])->name('Advertisment');
Route::get('/Company', [CompanyController::class, 'show'])->name('Company');

Route::get('/Eduction', [EductionController::class, 'show'])->name('Eduction');
Route::get('/Experince', [ExperinceController::class, 'show'])->name('Experince');
Route::get('/Job', [JobController::class, 'show'])->name('Job');
Route::get('/role', [roleController::class, 'show'])->name('role');
Route::get('/service', [serviceController::class, 'show'])->name('service');
Route::get('/User', [UserController::class, 'show'])->name('User');
Route::get('/Skill', [SkillController::class, 'show'])->name('Skill');
