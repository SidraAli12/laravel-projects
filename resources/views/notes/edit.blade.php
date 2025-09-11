<h1>Edit Note</h1>
<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $note->title }}"><br>
    <textarea name="content">{{ $note->content }}</textarea><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('notes.index') }}">Back</a>
