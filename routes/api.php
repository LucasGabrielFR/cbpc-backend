<?php

use App\Http\Controllers\Api\PlayerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{id}',[PlayerController::class, 'show']);

Route::get('/', function(){
    return response()->json([
        'success' => true
    ]);
});
