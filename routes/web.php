<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
Route::get('/', [HomeController::class, 'home']); // PREFERRED WAY

// Not using any controllers, instead returning the view directly from the router file
// Route::get("/posts", function () {
//     return view("posts");
// });

Route::get('series/{serie}', [PostController::class, 'show'])->name("showSerie");
Route::get('got', [PostController::class, 'show'])->name("showPost");
Route::get('/add', [PostController::class, 'add'])->name("addPost");
Route::get('/delete', [PostController::class, 'delete'])->name("deletePost");