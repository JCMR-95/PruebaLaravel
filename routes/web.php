<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Files
Route::get('UploadFile', [FilesController::class, 'uploadIndex']);
Route::post('UploadFile', [FilesController::class, 'upload']);

Route::get('ShowFiles', [FilesController::class, 'indexFiles']);
Route::get('Download/{file}', [FilesController::class, 'download']);
Route::get('ShowAllFiles', [FilesController::class, 'indexAllFiles']);

//Users
Route::get('showUsers', [UsersController::class, 'indexUsers']);
Route::get('EditUser/{id}', [UsersController::class, 'editUser']);
Route::put('UpdateUser/{id}', [UsersController::class, 'updateUser']);
Route::get('DeleteUser/{id}', [UsersController::class, 'destroy']);