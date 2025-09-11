<h1>Add Note</h1>
<form action="{{ route('notes.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="content" placeholder="Content"></textarea><br>
    <button type="submit">Save</button>
</form>
<a href="{{ route('notes.index') }}">Back</a>
