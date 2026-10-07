<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>

    <h1>Courses</h1>

    <a href="/course/create">Create Course</a>

    <br><br>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @forelse($courses as $course)

        <div>
            <h2>{{ $course->name }}</h2>

            <p>Description: {{ $course->description }}</p>
            <p>Duration: {{ $course->duration }} weeks</p>
            <p>Fee: {{ $course->fee }}</p>
            <p>Difficulty: {{ $course->difficulty }}</p>
            <p>Active: {{ $course->is_active ? 'Yes' : 'No' }}</p>

            <a href="/courses/{{ $course->id }}">View</a>
            <a href="/courses/{{ $course->id }}/edit">Edit</a>

            <form action="/courses/{{ $course->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>

        <hr>

    @empty

        <p>No courses found.</p>

    @endforelse

</body>
</html>