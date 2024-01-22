<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Using the index() method in the HomeController class 
Route::get('/', [HomeController::class, 'index']); // PREFERRED WAY

// Not using any controllers, instead returning the view directly from the router file
Route::get("/posts", function () {
    return view("posts");
});