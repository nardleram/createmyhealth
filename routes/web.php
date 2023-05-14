<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AffiliateController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/weare', function () {
    return view('weare');
});

Route::get('/learning', function () {
    return view('learning');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/photoze/jumpin', [LoginController::class, 'login'])->name('login');
Route::post('/photoze/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/photoze/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/photoze/index', [PhotoController::class, 'index'])->middleware('auth')->name('photoze');
Route::get('/photoze/add', [PhotoController::class, 'create'])->middleware('auth')->name('addPhoto');
Route::post('/photoze/store', [PhotoController::class, 'store'])->middleware('auth')->name('storePhoto');
Route::get('/photoze/edit/{photo}', [PhotoController::class, 'edit'])->middleware('auth')->name('editPhoto');
Route::put('/photoze/{photo}', [PhotoController::class, 'update'])->middleware('auth')->name('updatePhoto');
Route::delete('/photoze/delete/{photo}', [PhotoController::class, 'destroy'])->middleware('auth')->name('deletePhoto');

Route::get('/apply2affiliate', [AffiliateController::class, 'index'])->name('affiliate');
Route::post('/apply2affiliate/add', [AffiliateController::class, 'send'])->name('addAffiliate');

Route::get('/survey/vyoo', [SurveyController::class, 'index'])->middleware('auth')->name('vyooSurveys');
Route::get('/survey', [SurveyController::class, 'create'])->name('survey');
Route::post('/survey/store', [SurveyController::class, 'store'])->name('storeSurveyResponse');