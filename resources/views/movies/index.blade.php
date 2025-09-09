<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">🎬 My Movies</h1>

        <a href="/movies/create" 
           class="inline-block mb-6 px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">
            + Add New Movie
        </a>

        <ul class="space-y-3">
            @foreach($movies as $movie)
                <li class="p-4 bg-gray-50 rounded-lg shadow-sm hover:bg-gray-100">
                    <span class="font-semibold text-lg text-gray-700">{{ $movie['title'] }}</span>
                    <span class="text-gray-500">({{ $movie['year'] }})</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
