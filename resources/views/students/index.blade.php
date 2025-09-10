<h1>All Students</h1>
<a href="{{ route('students.create') }}">+ Add New Student</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<ul>
@foreach($students as $student)
    <li>
        {{ $student->name }} ({{ $student->course }})
        | <a href="{{ route('students.show', $student->id) }}">View</a>
        | <a href="{{ route('students.edit', $student->id) }}">Edit</a>
        | <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
    </li>
@endforeach
</ul>
