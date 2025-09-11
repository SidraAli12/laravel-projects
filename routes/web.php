<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NoteController;



// Route::get('/', function () {
//     return view('home');
// });


Route::get('/welcome', [WelcomeController::class, 'index']);

//new movies list task 

Route::get('/movies', [MovieController::class, 'index']);     // show all movies
Route::get('/movies/create', [MovieController::class, 'create']);  // show form
Route::post('/movies', [MovieController::class, 'store']);    // save new movie

//books task
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');

//student task 
Route::resource('students', StudentController::class);
//notee task 

Route::resource('notes', NoteController::class);
