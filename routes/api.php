<?php

use App\Http\Controllers\BandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('hello/{name}', 'App\Http\Controllers\HelloWorldController@hello');


Route::get('bands', [BandController::class, 'getAll']);

Route::get('bands/{id}', [BandController::class, 'getById']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
