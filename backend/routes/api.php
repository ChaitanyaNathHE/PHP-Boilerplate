<?php

use App\Http\Controllers\StoreController;
use App\Http\Controllers\ItemController;

// routes/api.php
use Illuminate\Support\Facades\Route;

Route::resource('items', ItemController::class);
Route::resource('stores', StoreController::class);

Route::post('items/{item}/stores/{store}', [ItemController::class, 'addStore']);
Route::delete('items/{item}/stores/{store}', [ItemController::class, 'removeStore']);
