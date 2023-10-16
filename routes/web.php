<?php

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
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);

//Master Item
Route::get('/Item', [App\Http\Controllers\MasterItemController::class, 'index']);
//

//Master User
Route::get('/User', [App\Http\Controllers\UserController::class, 'index']);
//
