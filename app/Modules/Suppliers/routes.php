<?php
use App\Modules\Suppliers\Products\Controllers\Create;

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'products'], function(){
  Route::post('/', [Create::class, 'store']);
  // Route::get('/', [Get::class, 'getAll']);
  // Route::get('/{id}', [Get::class, 'getById']);
  // Route::post('/{id}', [Edit::class, 'edit']);
  // Route::delete('/{id}', [Delete::class, 'delete']);
});