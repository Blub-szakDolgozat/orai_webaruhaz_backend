<?php

use App\Http\Controllers\TermekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Termékek lekérdezése
Route::get('/termekek', [TermekController::class, 'index']);
Route::post('/termekAdd', [TermekController::class, 'store']);
// Termék id-je alapján töröl:
//Route::delete('/termekTorol', [TermekController::class, 'destroy']);