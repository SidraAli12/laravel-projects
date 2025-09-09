<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <br><br>
        <label>Author:</label>
        <input type="text" name="author" required>
        <br><br>
        <button type="submit">Save</button>
    </form>

    <a href="{{ route('books.index') }}">Back to Books</a>
</body>
</html>
