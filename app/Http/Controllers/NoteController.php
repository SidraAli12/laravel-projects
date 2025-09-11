<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // show all notes
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    // create form
    public function create()
    {
        return view('notes.create');
    }

    // save note
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        Note::create($request->all());

        return redirect()->route('notes.index')->with('success', 'Note added successfully.');
    }

    // show single note
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    // edit form
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    // update note
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
    }

    // delete note
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }
}
