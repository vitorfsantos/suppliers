<?php
use App\Modules\Auth\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\Authenticate;

Route::group(['prefix' => 'auth'], function(){
  Route::post('/login', [AuthController::class, 'login'])->withoutMiddleware([Authenticate::class]);;
  Route::post('/logout', [AuthController::class, 'logout']);
});
