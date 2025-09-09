<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>
    <h1>Books</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($books as $book)
            <li><strong>{{ $book['title'] }}</strong> - {{ $book['author'] }}</li>
        @endforeach
    </ul>

    <a href="{{ route('books.create') }}">Add New Book</a>
</body>
</html>
