<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sparrow Tweet' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @stack('css')
</head>
<body class="bg-red-100">
    {{ $slot }}
</body>
</html>