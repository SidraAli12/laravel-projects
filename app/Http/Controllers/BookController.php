<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books = [
        ['title' => 'The Alchemist', 'author' => 'Paulo Coelho'],
        ['title' => 'Atomic Habits', 'author' => 'James Clear'],
    ];

    public function index()
    {
        $books = $this->books;
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // abhi database use nahi kar rahe, so sirf flash message dikhayenge
        return redirect()->route('books.index')->with('success', 'Book added: ' . $request->title);
    }
}
