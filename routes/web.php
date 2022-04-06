<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\CourseController;
use App\Http\Controllers\Client\EductionController;
use App\Http\Controllers\Client\ExperinceController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Client\SkillController;
use App\Http\Controllers\Client\SocialController;

use App\Http\Controllers\admin\jobController;
use App\Http\Controllers\admin\companyController;
use App\Http\Controllers\admin\aboutusController;
use App\Http\Controllers\admin\connectusController;
use App\Http\Controllers\admin\serviceController;

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
    return view('Front/index');
});
Route::get('/master', function () {
    return view('Front/master');
});

Route::get('/profile', function () {
    return view('Front/profile');
});
Route::get('/login', function () {
    return view('Front/login');
});
Route::get('/listJob', function () {
    return view('Front/listJob');
});

Route::get('/decjop', function () {
    return view('Front/decjop');
});

Route::get('/connect', function () {
    return view('Front/connect');
});
Route::get('/company', function () {
    return view('Front/company');
});
Route::get('/service', function () {
    return view('Front/service');
});
Route::get('/account', function () {
    return view('Front/account');
});
Route::get('/Aboutus', function () {
    return view('Front/Aboutus');
});

//client routing
Route::get('/Course', [CourseController::class, 'show'])->name('Course');
Route::get('/Eduction', [EductionController::class, 'show'])->name('Eduction');
Route::get('/Experince', [ExperinceController::class, 'show'])->name('Experince');
Route::get('/User', [UserController::class, 'show'])->name('User');
Route::get('/Skill', [SkillController::class, 'show'])->name('Skill');
Route::get('/Social', [SocialController::class, 'show'])->name('Social');
// admin routing
Route::get('Job', [jobController::class, 'show'])->name('Job');
Route::get('admincompany', [companyController::class, 'show'])->name('admincompany');
Route::get('adminaboutus', [aboutusController::class, 'show'])->name('adminaboutus');
Route::get('adminaconnectus', [connectusController::class, 'show'])->name('adminaconnect');
Route::get('adminaservice', [serviceController::class, 'show'])->name('adminaservice');

