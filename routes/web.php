<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostImageController;
use App\Http\Controllers\ManagementController;
use App\Models\Event;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/weare', function () {
    return view('weare');
});

Route::get('/learning', function () {
    return view('learning');
});

Route::get('/events', function () {
    return view('events')
        ->with(['events' => Event::with('images')
        ->orderBy('events.id', 'DESC')->get()]);
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/apply2affiliate', [AffiliateController::class, 'index'])->name('affiliate');
Route::post('/apply2affiliate/add', [AffiliateController::class, 'send'])->name('addAffiliate');

Route::get('/survey/vyoo', [SurveyController::class, 'index'])->middleware('auth')->name('vyooSurveys');
Route::get('/survey', [SurveyController::class, 'create'])->name('survey');
Route::post('/survey/store', [SurveyController::class, 'store'])->name('storeSurveyResponse');

//Management panel
Route::get('/mnarje/jumpin', [LoginController::class, 'login'])->name('login');
Route::post('/mnarje/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

//AUTH 
Route::group(['middleware' => ['auth']], function () {
    Route::get('/mnarje/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/test', [PostController::class, 'test'])->name('test');

    Route::get('/mnarje/index', [ManagementController::class, 'index'])->name('mnarje.index');

    Route::get('/events/index', [EventController::class, 'index'])->name('events');
    Route::get('/events/add', [EventController::class, 'create'])->name('addEvent');
    Route::post('/events/store', [EventController::class, 'store'])->name('storeEvent');
    Route::get('/events/edit/{event}', [EventController::class, 'edit'])->name('editEvent');
    Route::patch('/events/update', [EventController::class, 'update'])->name('updateEvent');
    Route::delete('/events/delete/{event}', [EventController::class, 'destroy'])->name('deleteEvent');

    Route::get('/posts/index', [PostController::class, 'index'])->name('posts');
    Route::get('/posts/add', [PostController::class, 'create'])->name('addPost');
    Route::post('/posts/store', [PostController::class, 'store'])->name('storePost');
    Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('editPost');
    Route::patch('/posts/update', [PostController::class, 'update'])->name('updatePost');
    Route::post('/posts/images/store', [PostImageController::class, 'store'])->name('storePostImage');
    Route::delete('/posts/delete/{post}', [PostController::class, 'destroy'])->name('deletePost');

    Route::get('/categories/index', [CategoryController::class, 'index'])->name('categories');
    Route::get('/categories/add', [CategoryController::class, 'create'])->name('addCategory');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('storeCategory');
    Route::patch('/categories/update', [CategoryController::class, 'update'])->name('updateCategory');
    Route::delete('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('deleteCategory');

    Route::get('/schedules/index', [ScheduleController::class, 'index'])->name('schedules');

    Route::get('/photoze/index', [PhotoController::class, 'index'])->name('photoze');
    Route::get('/photoze/add', [PhotoController::class, 'create'])->name('addPhoto');
    Route::post('/photoze/store', [PhotoController::class, 'store'])->name('storePhoto');
    Route::get('/photoze/edit/{photo}', [PhotoController::class, 'edit'])->name('editPhoto');
    Route::patch('/photoze/{photo}', [PhotoController::class, 'update'])->name('updatePhoto');
    Route::delete('/photoze/delete/{photo}', [PhotoController::class, 'destroy'])->name('deletePhoto');
});