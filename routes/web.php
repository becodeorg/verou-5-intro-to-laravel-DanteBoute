<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\UserController;
use App\Models\Serie;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");

// Using the { } around "id" for example alows us to mark "id" as a slug. Meaning it is a keyword that will be the placeholder for an actual value (id could be replaced by number 2 if the url is "users/2")

Route::get("users", [UserController::class, 'index'])->name("showUsers");
Route::get("users/{id}", [UserController::class, 'show'])->name("showUser");

Route::get("series", [SerieController::class, 'index'])->name("showSeries");
Route::get("serie/{id}", [SerieController::class, 'show'])->name("showSerie");