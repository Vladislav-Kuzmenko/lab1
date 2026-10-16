<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ClubController;

// Перенаправлення з головної сторінки на список клубів (або країн)
Route::get('/', function () {
    return redirect()->route('clubs.index');
});

// Ресурсний маршрут для країн (Case 3)
Route::resource('country', CountryController::class);

// Ресурсний маршрут для клубів (Індивідуальне завдання)
Route::resource('clubs', ClubController::class);
