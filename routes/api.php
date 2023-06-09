<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PassportAuthController;
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

Route::post("login", [PassportAuthController::class, 'login']);
Route::post("register", [PassportAuthController::class, 'register']);
Route::get("logout", [PassportAuthController::class, 'logout'])->middleware('auth:api');
Route::get("alltasks", [PassportAuthController::class, 'alltasks']);
Route::get("mytasks", [PassportAuthController::class, 'mytasks'])->middleware('auth:api');
Route::get("task/{task}", [PassportAuthController::class, 'task']);
Route::post('task', [PassportAuthController::class, 'store'])->middleware('auth:api');
