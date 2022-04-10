<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
use App\Http\Controllers\admin\settingscontroller;

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
Route::get('/singup', function () {
    return view('Front/singup');
});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    });
//client routing
Route::get('/Course', [CourseController::class, 'show'])->name('Course');

Route::get('/Eduction', [EductionController::class, 'show'])->name('Eduction');
Route::post('/save_eduction', [EductionController::class, 'insert'])->name('save_eduction');

Route::get('/Experince', [ExperinceController::class, 'show'])->name('Experince');
Route::post('/save_experince', [ExperinceController::class, 'insert'])->name('save_experince');

Route::get('/User', [UserController::class, 'show'])->name('User');
Route::post('/save_user',[UserController::class,'register'])->name('save_user');

Route::get('/Skill', [SkillController::class, 'show'])->name('Skill');
Route::post('/save_skill',[SkillController::class,'insert'])->name('save_skill');

Route::get('/Social', [SocialController::class, 'show'])->name('Social');
Route::post('/save_social',[SocialController::class,'insert'])->name('save_social');
// admin routing

//company Routing
Route::get('/admincompany', [companyController::class, 'show'])->name('admincompany');
Route::post('/save_company',[companyController::class,'insert'])->name('save_company');

Route::get('adminaboutus', [aboutusController::class, 'show'])->name('adminaboutus');
Route::post('/save_aboutus', [aboutusController::class, 'insert'])->name('save_aboutus');

Route::get('adminaconnectus', [connectusController::class, 'show'])->name('adminaconnect');
Route::post('/save_connectus', [connectusController::class, 'insert'])->name('save');

Route::get('adminaservice', [serviceController::class, 'show'])->name('adminaservice');
Route::post('save_service', [serviceController::class, 'insert'])->name('save_service');

Route::get('/adminJob', [jobController::class, 'show'])->name('Job');
Route::post('/save_job', [jobController::class, 'insert'])->name('save_job');

Route::get('/generate_role', [settingscontroller::class, 'generateRules'])->name('generate_role');

