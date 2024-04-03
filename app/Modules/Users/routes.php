<?php
use App\Modules\Users\Controllers\Get;
use App\Modules\Users\Controllers\Create;
use App\Modules\Users\Controllers\Edit;
use App\Modules\Users\Controllers\Delete;

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'users'], function(){
  Route::post('/', [Create::class, 'store']);
  Route::get('/', [Get::class, 'getAll']);
  Route::get('/{id}', [Get::class, 'getById']);
  Route::get('/get-types', [Get::class, 'getTypes']);
  Route::post('/{id}', [Edit::class, 'edit']);
  Route::post('/change-password/{id}', [Edit::class, 'changePassword']);
  Route::delete('/{id}', [Delete::class, 'delete']);
});