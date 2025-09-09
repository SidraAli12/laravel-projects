<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Show all movies
    public function index() {
        $movies = [
            ['title' => 'Avengers', 'year' => 2012],
            ['title' => 'Inception', 'year' => 2010],
        ];
        return view('movies.index', compact('movies'));
    }

    // Show form to create a movie
    public function create() {
        return view('movies.create');
    }

    // Store new movie
    public function store(Request $request) {
        return "Movie added: " . $request->title . " (" . $request->year . ")";
    }
}