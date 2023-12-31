<?php

use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('v1')->name('app.v1.')->namespace('Api/V1')->group(function () {
//     Route::get('/status', function() {
//         return response()->json(['status' =>'Success']);
//     })->name('status');
//     Route::get('user/show', [Datacontroller::class , 'show']);
// });

Route::get('/hello', function () {
    return ['message' => 'Hello, API!'];
});

Route::prefix('v1')->group(function (){
    Route::apiResource('/tasks',TaskController::class);
});