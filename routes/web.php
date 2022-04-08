<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Files
Route::get('UploadFile', [FilesController::class, 'uploadIndex']);
Route::post('UploadFile', [FilesController::class, 'upload']);

Route::get('ShowFiles', [FilesController::class, 'index']);
Route::get('Download/{file}', [FilesController::class, 'download']);