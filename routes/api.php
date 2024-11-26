<?php

use App\Http\Controllers\TermekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Termékek lekérdezése:
Route::get('/termekek', [TermekController::class, 'index']);

//Új termék hozzáadása:
Route::post('/termekAdd', [TermekController::class, 'store']);

// Termék id alapján törlése:
Route::delete('/termekTorol/{id}', [TermekController::class, 'destroy']);

// Termék id alapján lekérdezése:
Route::get('/termekMegmutat/{id}', [TermekController::class, 'show']);

// Termék id alapján részlegesen frissítése:
Route::patch('/termekReszlegesenFrissit/{id}', [TermekController::class, 'update']);