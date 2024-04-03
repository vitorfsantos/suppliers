<?php
use App\Modules\Address\Controllers\Create;
use App\Modules\Address\Controllers\Delete;
use App\Modules\Address\Controllers\Edit;
use App\Modules\Address\Controllers\Get;

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'address'], function(){
  Route::post('/', [Create::class, 'store']);
  Route::get('/', [Get::class, 'getAll']);
  Route::get('/{id}', [Get::class, 'getById']);
  Route::post('/{id}', [Edit::class, 'edit']);
  Route::delete('/{id}', [Delete::class, 'delete']);
});