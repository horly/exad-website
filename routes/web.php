<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/lang/{lang}',
    [LanguageController::class, 'switchLang'])
        ->name('app_language');

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('app_home');
    Route::get('/achievements_details/{reference_company}', 'achievements_details')->name('app_achievements_details');
    Route::get('/achievements', 'achievements')->name('app_achievements');
    Route::get('/about_us', 'about_us')->name('app_about_us');
    Route::get('/services', 'services')->name('app_services');
    Route::get('/privacy_policy', 'privacyPolicy')->name('app_privacy_policy');
    Route::post('/send-message', 'sendMessage')->name('app_send_message');
});
