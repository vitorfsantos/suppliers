<?php
use App\Modules\Auth\Controllers\AuthController;

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'auth'], function(){
  Route::post('/logout', [AuthController::class, 'logout']);
});
