<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\DirectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#admin get Routes
Route::middleware(['sessionadmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/mainPageNew', [AdminController::class, 'ap_showAll']);
    Route::get('/mainpagenews/delete', [AdminController::class, 'mainpagenews_destroy']);
    Route::get('/admin/addNews', [AdminController::class, 'addNews']);
    Route::get('/admin/allNews', [AdminController::class, 'showNews']);
    Route::get('/news/delete', [AdminController::class, 'destroyNews']);
    Route::get('/admin/club/u11', [AdminController::class, 'u11']);
    Route::get('/admin/club/u12', [AdminController::class, 'u12']);
    Route::get('/admin/club/u13', [AdminController::class, 'u13']);
    Route::get('/admin/club/u14', [AdminController::class, 'u14']);
    Route::get('/admin/club/u15', [AdminController::class, 'u15']);
    Route::get('/admin/club/u16', [AdminController::class, 'u16']);
    Route::get('/admin/club/u17', [AdminController::class, 'u17']);
    Route::get('/admin/club/u18', [AdminController::class, 'u18']);
    Route::get('/admin/addLider', [DirectionController::class, 'addLiders']);
    #show for database
    Route::get('/admin/showU11', [AdminController::class, 'showU11']);
    Route::get('/admin/showU12', [AdminController::class, 'showU12']);
    Route::get('/admin/showU13', [AdminController::class, 'showU13']);
    Route::get('/admin/showU14', [AdminController::class, 'showU14']);
    Route::get('/admin/showU15', [AdminController::class, 'showU15']);
    Route::get('/admin/showU16', [AdminController::class, 'showU16']);
    Route::get('/admin/showU17', [AdminController::class, 'showU17']);
    Route::get('/admin/showU18', [AdminController::class, 'showU18']);
    #delete data
    Route::get('/club/delete', [ClubController::class, 'deleteClubMember']);
    Route::get('/coach/delete', [ClubController::class, 'deleteCoach']);
});
#admin post Routes
Route::middleware(['sessionadmin'])->group(function () {
    Route::post('/mainPage', [AdminController::class, 'firstPageNews']);
    Route::post('/addNews', [AdminController::class, 'addNewsBackend']);
    Route::post('/u11Coach', [AdminController::class, 'u11CoachBackend']);
    Route::post('/u11Members', [AdminController::class, 'u11StudentBackend']);
    Route::post('/u12Coach', [AdminController::class, 'u12CoachBackend']);
    Route::post('/u12Members', [AdminController::class, 'u12StudentBackend']);
    Route::post('/u13Coach', [AdminController::class, 'u13CoachBackend']);
    Route::post('/u13Members', [AdminController::class, 'u13StudentBackend']);
    Route::post('/u14Coach', [AdminController::class, 'u14CoachBackend']);
    Route::post('/u14Members', [AdminController::class, 'u14StudentBackend']);
    Route::post('/u15Coach', [AdminController::class, 'u15CoachBackend']);
    Route::post('/u15Members', [AdminController::class, 'u15StudentBackend']);
    Route::post('/u16Coach', [AdminController::class, 'u16CoachBackend']);
    Route::post('/u16Members', [AdminController::class, 'u16StudentBackend']);
    Route::post('/u17Coach', [AdminController::class, 'u17CoachBackend']);
    Route::post('/u17Members', [AdminController::class, 'u17StudentBackend']);
    Route::post('/u18Coach', [AdminController::class, 'u18CoachBackend']);
    Route::post('/u18Members', [AdminController::class, 'u18StudentBackend']);
    Route::post('/addLider', [AdminController::class, 'liderAdd']);
});

Route::get('/login', [AdminLoginController::class, 'login']);

Route::get('/breaking-news', [DirectionController::class, 'breakingNews']);
Route::get('/football-news', [DirectionController::class, 'footballNews']);

Route::group(['prefix' => 'club'], function () {
    Route::get('/news', [DirectionController::class, 'clubNews']);
    Route::get('/type/{type}', [DirectionController::class, 'u11']);
    Route::get('/history', [DirectionController::class, 'clubHistory']);
    Route::get('/liders', [DirectionController::class, 'lider']);
    Route::get('/doctors', [DirectionController::class, 'doctors']);
    Route::get('/coachs', [DirectionController::class, 'coach']);
});

Route::get('/contact', [DirectionController::class, 'contact']);

Route::post('/login', [AdminLoginController::class, 'loginSession']);
