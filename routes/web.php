<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [Controller::class, 'main_page']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Курсы

Route::match(['get','post'],'/course/add', [CourseController::class, 'store'])->middleware('auth','admin');
Route::controller(CourseController::class)->middleware('auth')->group(function () {
    Route::get('/course/{id}', 'show')->name('course');
    Route::get('course/', 'index')->name('courses');
});
//домашка
Route::match(['get','post'],'/lesson/{id}/homework_list', [HomeworkController::class, 'index']);
Route::match(['get','post'],'/lesson/{id}/homework_list/{hwid}', [HomeworkController::class, 'show']);
// Уроки
Route::match(['get','post'],'/lesson/create', [LessonController::class, 'store'])->middleware('auth','admin');
Route::controller(LessonController::class)->middleware('auth')->group(function () {
    Route::match(['get','post'],'/lesson/{id}', 'show');

    //Route::get('/course/', 'index');
    //Route::post('/orders', 'store');
});
require __DIR__.'/auth.php';
