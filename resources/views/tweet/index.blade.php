<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparrow Tweet</title>
</head>
<body>
    <h1>Sparrow Tweet</h1>
    <div>
        @foreach($tweets as $tweet)
            <p>{{ $tweet->content }}</p>
        @endforeach
    </div>
</body>
</html>