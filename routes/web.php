<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MoodleController};

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

Route::get('/', [MoodleController::class, 'users']);

Route::get('moodle_users', [MoodleController::class, 'users']);
Route::get('moodle_courses', [MoodleController::class, 'courses']);
Route::get('moodle_users_courses', [MoodleController::class, 'usersCoursesWithGrades']);
