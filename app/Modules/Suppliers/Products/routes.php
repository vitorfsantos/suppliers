<?php
use App\Modules\Suppliers\Controllers\Create;
use App\Modules\Suppliers\Controllers\Delete;
use App\Modules\Suppliers\Controllers\Edit;
use App\Modules\Suppliers\Controllers\Get;

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'suppliers'], function(){
  Route::post('/', [Create::class, 'store']);
  Route::get('/', [Get::class, 'getAll']);
  Route::get('/{id}', [Get::class, 'getById']);
  Route::post('/{id}', [Edit::class, 'edit']);
  Route::delete('/{id}', [Delete::class, 'delete']);
});