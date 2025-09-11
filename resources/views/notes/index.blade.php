<h1>All Notes</h1>
<a href="{{ route('notes.create') }}">+ Add New Note</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<ul>
@foreach($notes as $note)
    <li>
        <strong>{{ $note->title }}</strong>
        | <a href="{{ route('notes.show', $note->id) }}">View</a>
        | <a href="{{ route('notes.edit', $note->id) }}">Edit</a>
        | <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
    </li>
@endforeach
</ul>
