<?php

use App\Http\Controllers\API\ActivityLogController;
use App\Http\Controllers\API\UserLessonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!s
|
*/

Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::get('/learnings-count/{user}', [UserLessonController::class, 'get_learnings_count']);
    Route::get('/activity-log/{user}', [ActivityLogController::class, 'get_activity_log']);
});
