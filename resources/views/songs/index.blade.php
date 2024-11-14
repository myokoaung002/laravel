<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Top 10 Songs List</h1>
    <ol>
        @foreach($songs as $song)
        <li class="m-3">
            {{ $song['name'] }}
        </li>
        @endforeach
    </ol>
</body>
</html>