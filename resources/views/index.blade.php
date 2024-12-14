<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schools and Courses</title>
</head>
<body>
    @foreach ($schools as $school)
        <div>
            <h2>{{ $school->name }}</h2>
            <p>{{ $school->description }}</p>
            <h3>Courses:</h3>
            <ul>
                @foreach ($school->courses as $course)
                    <li>
                        <strong>{{ $course->name }}</strong> - {{ $course->description }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</body>
</html>
