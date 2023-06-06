<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([], function () {
    Route::apiResources(['events' => EventsController::class], ['only' => ['store', 'index']]);
});

Route::group([], function () {
    Route::apiResources(['participants' => ParticipantsController::class], ['only' => ['store']]);
});

Route::group([], function () {
    Route::apiResources(['attendance' => AttendanceController::class], ['only' => ['store']]);
});
