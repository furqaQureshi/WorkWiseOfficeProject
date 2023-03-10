<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'create']);
Route::post('/', [UserController::class, 'sign_in']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/jobs', [PostController::class, 'jobData']);
Route::get('/jobAllData', [PostController::class, 'jobAllData']);