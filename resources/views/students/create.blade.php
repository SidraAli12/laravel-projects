<h1>Add Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="course" placeholder="Course"><br>
    <button type="submit">Save</button>
</form>
<a href="{{ route('students.index') }}">Back</a>
