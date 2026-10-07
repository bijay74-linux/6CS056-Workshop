<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

    <h1>Edit Course</h1>

    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $course->name) }}">
        </div>

        <br>

        <div>
            <label>Description:</label>
            <textarea name="description">{{ old('description', $course->description) }}</textarea>
        </div>

        <br>

        <div>
            <label>Duration (weeks):</label>
            <input type="number" name="duration" value="{{ old('duration', $course->duration) }}">
        </div>

        <br>

        <div>
            <label>Fee:</label>
            <input type="number" step="0.01" name="fee" value="{{ old('fee', $course->fee) }}">
        </div>

        <br>

        <div>
            <label>Difficulty:</label>
            <select name="difficulty">
                <option value="Easy" {{ $course->difficulty == 'Easy' ? 'selected' : '' }}>Easy</option>
                <option value="Medium" {{ $course->difficulty == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="Hard" {{ $course->difficulty == 'Hard' ? 'selected' : '' }}>Hard</option>
            </select>
        </div>

        <br>

        <div>
            <label>
                <input type="checkbox" name="is_active" value="1"
                    {{ $course->is_active ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <br>

        <button type="submit">Update Course</button>
    </form>

    <br>

    <a href="/courses/{{ $course->id }}">Back to Course</a>

</body>
</html>