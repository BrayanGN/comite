<?php

use App\Http\Controllers\AprendizController;
use App\Http\Controllers\ComiteController;
use App\Http\Controllers\ProgramaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('products', ProductController::class);
    Route::resource('programas', ProgramaController::class);
    Route::resource('aprendizs', AprendizController::class);
    Route::resource('comites', ComiteController::class);
});
Route::group(['middleware' => ['auth','role:Admin']], function() {
    Route::resource('users', UserController::class);
});
