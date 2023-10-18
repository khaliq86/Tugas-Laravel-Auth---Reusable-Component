<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

//Form Route
Route::get('/form', [App\Http\Controllers\ProjectController::class, 'index'])->name('form')->middleware('auth');
Route::post('/form/create', [App\Http\Controllers\ProjectController::class, 'store'])->name('create')->middleware('auth');

//Project Route
Route::get('/project/delete/{id}', [App\Http\Controllers\ProjectController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/project/edit/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/project/update/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('update')->middleware('auth');

//User Route
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile')->middleware('auth');