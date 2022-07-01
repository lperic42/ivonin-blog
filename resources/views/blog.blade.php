<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ivonin blog</title>
    <link rel="icon" href="{{ url('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700&display=swap" rel="stylesheet">
    <script defer src="{{ mix('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/6b159970d7.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <ul>
        @foreach($blogs as $blog)
            <li>
                <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
            </li>
        @endforeach
        </ul>
    </div>
</body>
</html>
