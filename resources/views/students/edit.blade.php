<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $student->name }}"><br>
    <input type="email" name="email" value="{{ $student->email }}"><br>
    <input type="text" name="course" value="{{ $student->course }}"><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('students.index') }}">Back</a>
