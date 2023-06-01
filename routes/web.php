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
// DB::listen(function ($event) {
//     dump($event->sql);
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myfirstlaravel', function () {
    return view('welcome');
});

Route::get('/myfirstview', [Lab1Controller::class,'index']);
Route::get('/myfirstview/show', [Lab1Controller::class,'show']);

Route::resource('todolist', TodolistController::class);


Route::get('task', [TaskController::class,'index'])->name('task.index');
Route::post('task/ajaxLoadTasks', [TaskController::class,'ajaxLoadTasks'])->name('task.ajaxLoadTasks');
Route::post('task/ajaxLoadTask', [TaskController::class,'ajaxLoadTask'])->name('task.ajaxLoadTask');
Route::delete('task/{task}', [TaskController::class,'destroy'])->name('task.destroy');
Route::get('task/create', [TaskController::class,'create'])->name('task.create');

Route::post('task', [TaskController::class,'store'])->name('task.store');
Route::get('task/dt', [TaskController::class,'indexdt'])->name('task.indexdt');
Route::get('task/{task}', [TaskController::class,'show'])->name('task.show');
Route::get('task/{task}/edit', [TaskController::class,'edit'])->name('task.edit');
Route::put('task/{task}', [TaskController::class,'update'])->name('task.update');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
