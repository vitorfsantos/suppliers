<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Modules Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Modules routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([], base_path('app/Modules/Auth/routes.php'));
Route::group([], base_path('app/Modules/Users/routes.php'));
