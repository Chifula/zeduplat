<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Counseling Test</title>
</head>
<body>
    @if (isset($questions))
        <form method="POST" action="/test-me">
            @csrf
            @foreach ($questions as $question)
                <div>
                    <label>{{ $question['text'] }}</label>
                    <input type="text" name="answer_{{ $question['id'] }}" />
                </div>
            @endforeach
            <button type="submit">Submit</button>
        </form>
    @elseif (isset($recommendations))
        <h3>Recommended Careers:</h3>
        <ul>
            @foreach ($recommendations as $career)
                <li>{{ $career }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
