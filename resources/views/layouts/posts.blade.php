<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>

    @vite('resouces/js/app.js')
</head>
<body>
    <div class="containe">
        <h1>
            @yield('title')
        </h1>
        @yield('content')
    </div>
</body>
</html>