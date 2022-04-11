<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Client\CourseController;
use App\Http\Controllers\Client\EductionController;
use App\Http\Controllers\Client\ExperinceController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Client\SkillController;
use App\Http\Controllers\Client\SocialController;
use App\Http\Controllers\admin\ForgotPasswordController;
use App\Http\Controllers\admin\ResetPasswordController;

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

    Route::group(['middleware'=>'auth'],function(){
        Route::group(['middleware'=>'role:admin|super_admin'],function(){

            Route::get('/dashboard',[UserController::class,'adminDash'])->name('dashboard');


        });

        Route::get('/logout',[UserController::class,'logout'])->name('logout');

    });
//change password
Route::get('/change-password', [UserController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [UserController::class, 'updatePassword'])->name('update-password');

Route::get('/forget-password',  [ForgotPasswordController::class,'getEmail']);
Route::post('/forget-password', [ForgotPasswordController::class,'postEmail'])->name('forget-password');
Route::get('/reset-password/{token}', [ResetPasswordController::class,'getPassword']);
Route::post('/reset-password', [ResetPasswordController::class,'updatePassword']);
//client routing
Route::get('/Course', [CourseController::class, 'show'])->name('Course');
Route::post('/save_course', [CourseController::class, 'insert'])->name('save_course');



Route::get('/Eduction', [EductionController::class, 'show'])->name('Eduction');
Route::post('/save_eduction', [EductionController::class, 'insert'])->name('save_eduction');

Route::get('/Experince', [ExperinceController::class, 'show'])->name('Experince');
Route::post('/save_experince', [ExperinceController::class, 'insert'])->name('save_experince');

Route::get('/User', [UserController::class, 'show'])->name('User');
Route::post('/save_user',[UserController::class,'register'])->name('save_user');
Route::get('/front/login',[UserController::class,'showLogin'])->name('login');
Route::post('/do_login',[UserController::class,'login'])->name('do_login');

//Skill Routing
Route::get('/Skill', [SkillController::class, 'show'])->name('Skill');
Route::post('/save_skill',[SkillController::class,'insert'])->name('save_skill');
Route::get('/list_skill',[SkillController::class,'index'])->name('list_skill');
Route::get('/edit_skill/{cat_id}',[SkillController::class,'edit'])->name('edit_skill');
Route::get('/toggle_skill/{cat_id}',[SkillController::class,'toggle'])->name('toggle_skill');
Route::post('/update_skill/{cat_id}',[SkillController::class,'update'])->name('update_skill');



Route::get('/Social', [SocialController::class, 'show'])->name('Social');
Route::post('/save_social',[SocialController::class,'insert'])->name('save_social');
// admin routing

//company Routing
Route::get('/admincompany', [companyController::class, 'show'])->name('admincompany');
Route::post('/save_company',[companyController::class,'insert'])->name('save_company');
Route::get('/list_company',[companyController::class,'index'])->name('list_company');
Route::get('/edit_company/{cat_id}',[companyController::class,'edit'])->name('edit_company');
Route::get('/toggle_company/{cat_id}',[companyController::class,'toggle'])->name('toggle_company');
Route::post('/update_company/{cat_id}',[companyController::class,'update'])->name('update_company');


Route::get('adminaboutus', [aboutusController::class, 'show'])->name('adminaboutus');
Route::post('/save_aboutus', [aboutusController::class, 'insert'])->name('save_aboutus');

Route::get('/adminaconnectus', [connectusController::class, 'show'])->name('adminaconnect');
Route::post('/save_connectus', [connectusController::class, 'insert'])->name('save');

Route::get('adminaservice', [serviceController::class, 'show'])->name('adminaservice');
Route::post('save_service', [serviceController::class, 'insert'])->name('save_service');
// Routing Job
Route::get('adminJob', [jobController::class, 'show'])->name('Job');
Route::post('/save_job', [jobController::class, 'insert'])->name('save_job');
Route::get('/list_job',[jobController::class,'index'])->name('list_job');
Route::get('/edit_job/{cat_id}',[jobController::class,'edit'])->name('edit_job');
Route::get('/toggle_job/{cat_id}',[jobController::class,'toggle'])->name('toggle_job');
Route::post('/update_job/{cat_id}',[jobController::class,'update'])->name('update_job');

Route::get('/generate_role', [settingscontroller::class, 'generateRules'])->name('generate_role');

