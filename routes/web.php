<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MainViewController;
use App\Http\Controllers\TelegramBotController;
use App\Http\Controllers\UpdateContentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainViewController::class, 'index']);
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
    Route::get('/admin/addDoc', [AdminController::class, 'addDoc']);
    Route::get('/admin/addCoach', [AdminController::class, 'addCoach']);
    Route::get('/admin/addFamous', [AdminController::class, 'addFamous']);
    Route::get('/admin/addEvent', [AdminController::class, 'addEvent']);
    #show for database
    Route::get('/admin/show-team/{team}', [ClubsController::class, 'showTeam']);

    Route::get('/admin/showLider', [AdminController::class, 'showLider']);
    Route::get('/admin/showDoctors', [AdminController::class, 'showDoctor']);
    Route::get('/admin/showCoach', [AdminController::class, 'showCoach']);
    Route::get('/admin/showFamous', [AdminController::class, 'showFamous']);
    Route::get('/admin/showEvent', [AdminController::class, 'showEvent']);
    #delete data
    Route::get('/club/delete', [ClubController::class, 'deleteClubMember']);
    Route::get('/coach/delete', [ClubController::class, 'deleteCoach']);

    Route::get('/lider/delete', [AdminController::class, 'deleteLider']);
    Route::get('/doctors/delete', [AdminController::class, 'delDocBackend']);
    Route::get('/coach-all/delete', [AdminController::class, 'delCoachBackend']);
    Route::get('/famous/delete', [AdminController::class, 'delFamousBackend']);
    Route::get('/event/delete', [AdminController::class, 'delEventBg']);
    #edit controller
    Route::get('/admin/{editType}/{id}', [UpdateContentsController::class, 'updateRoute']);
    Route::get('/club/edit', [UpdateContentsController::class, 'teamEditRoute']);
    Route::get('/coach/edit', [UpdateContentsController::class, 'caochEditRoute']);
    #update clubs
    Route::get('/change/{club}', [ClubsController::class, 'clubUpdateOneLever']);
});
#admin post Routes
Route::middleware(['sessionadmin'])->group(function () {
    Route::post('/mainPage', [AdminController::class, 'firstPageNews']);
    Route::post('/addNews', [AdminController::class, 'addNewsBackend']);
    Route::post('/addLider', [AdminController::class, 'liderAdd']);
    Route::post('/addDoc', [AdminController::class, 'addDocBackend']);
    Route::post('/addCoach', [AdminController::class, 'addCoachBackend']);
    Route::post('/addFamous', [AdminController::class, 'addFamousBG']);
    Route::post('/addEvent', [AdminController::class, 'addEventBG']);
    Route::post('/admin/edit/{editType}/{id}', [UpdateContentsController::class, 'update']);
    #add coach
    Route::post('/admin/storeCoach/{club}', [CoachController::class, 'store']);
    Route::post('/admin/storeStudents/{club}', [ClubsController::class, 'store']);
    # update
    Route::post('/admin/edit-team/{id}/{club}', [UpdateContentsController::class, 'updateTeam']);
    Route::post('/admin/edit-coach/{id}/{club}', [UpdateContentsController::class, 'updateCoach']);
});
Route::group(['prefix' => 'club'], function () {
    Route::get('/news', [DirectionController::class, 'clubNews']);
    Route::get('/type', [DirectionController::class, 'u11']);
    Route::get('/history', [DirectionController::class, 'clubHistory']);
    Route::get('/liders', [DirectionController::class, 'lider']);
    Route::get('/doctors', [DirectionController::class, 'doctors']);
    Route::get('/coachs', [DirectionController::class, 'coach']);
});
Route::get('/contact', [DirectionController::class, 'contact']);
Route::post('/login', [AdminLoginController::class, 'loginSession']);
Route::get('/login', [AdminLoginController::class, 'login']);
Route::get('/breaking-news', [DirectionController::class, 'breakingNews']);
Route::get('/news', [DirectionController::class, 'showNews']);
Route::post('/sendMessage', [TelegramBotController::class, 'sendMessage']);
Route::get('/lang/{lan}', [LocalizationController::class, 'changeLang']);