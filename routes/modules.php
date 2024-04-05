<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Controllers\AuthController;
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

Route::get('/no-auth', function (Request $request) {
  return response('Nenhum usuário Logado', 401);
})->name('login');


Route::group([], function () {
  Route::post('auth/login', [AuthController::class, 'login']);
});

Route::middleware(['auth:sanctum'])->group(function () {
  Route::group([], base_path('app/Modules/Auth/routes.php'));
  Route::group([], base_path('app/Modules/Users/routes.php'));
  Route::group([], base_path('app/Modules/Suppliers/routes.php'));
  Route::group([], base_path('app/Modules/Suppliers/Products/routes.php'));
  Route::group([], base_path('app/Modules/Address/routes.php'));
});
