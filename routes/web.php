<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MovieController;



// Route::get('/', function () {
//     return view('home');
// });


Route::get('/welcome', [WelcomeController::class, 'index']);

//new movies list task 

Route::get('/movies', [MovieController::class, 'index']);     // show all movies
Route::get('/movies/create', [MovieController::class, 'create']);  // show form
Route::post('/movies', [MovieController::class, 'store']);    // save new movie

