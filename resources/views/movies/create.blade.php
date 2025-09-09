<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Movie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">➕ Add a New Movie</h1>

        <form method="POST" action="/movies" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium text-gray-700">Title</label>
                <input type="text" name="title" 
                       class="w-full mt-1 border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Year</label>
                <input type="number" name="year" 
                       class="w-full mt-1 border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
            </div>

            <button type="submit" 
                    class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600">
                Save Movie
            </button>
        </form>
    </div>
</body>
</html>
