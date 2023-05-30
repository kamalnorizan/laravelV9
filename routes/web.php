<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lab1Controller;
use App\Http\Controllers\TodolistController;
use App\Http\Controllers\TaskController;
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
DB::listen(function ($event) {
    dump($event->sql);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myfirstlaravel', function () {
    return view('welcome');
});

Route::get('/myfirstview', [Lab1Controller::class,'index']);
Route::get('/myfirstview/show', [Lab1Controller::class,'show']);

Route::resource('todolist', TodolistController::class);


Route::get('task', [TaskController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
