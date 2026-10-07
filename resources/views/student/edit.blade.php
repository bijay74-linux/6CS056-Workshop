<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $student->name) }}">
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', $student->email) }}">
        </div>

        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ old('phone', $student->phone) }}">
        </div>

        <div>
            <label>Address:</label>
            <textarea name="address">{{ old('address', $student->address) }}</textarea>
        </div>

        <div>
            <label>Date of Birth:</label>
            <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth) }}">
        </div>

        <button type="submit">Update Student</button>
    </form>

    <a href="/students/{{ $student->id }}">Back to Student</a>

</body>
</html>