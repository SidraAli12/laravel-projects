<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // sab students show
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // create form
    public function create()
    {
        return view('students.create');
    }

    // save new student
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email|unique:students',
            'course' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    // show single student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // edit form
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // update student
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email|unique:students,email,'.$student->id,
            'course' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // delete student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
