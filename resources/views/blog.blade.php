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
        <div class="navigation-wrap">
            <navigation url="{{ route('blogs.list') }}" search-results-page="{{ route('blogs.search') }}"></navigation>
        </div>
        <div class="posts-wrap" style="min-height: 100vh; position: relative">
            <h1 class="heading" style="margin: 70px 0 150px 0">Sva moja putovanja</h1>
            <div class="posts">
                @foreach($blogs as $blog)
                    <Post image="{{ $blog->featured_image }}" url="{{ route('blogs.show', ['slug' => $blog->slug]) }}" title="{{ $blog->title }}"></Post>
                @endforeach

            </div>


            @if($blogs->links())
                <div class="pagination-links">
                    <a href="{{ $blogs->previousPageUrl() }}" class="{{ !$blogs->previousPageUrl() ? 'disabled' : '' }}">&larr; Prethodna stranica</a>
                    <a href="{{ $blogs->nextPageUrl() }}" class="{{ !$blogs->nextPageUrl() ? 'disabled' : '' }}">Sljedeća stranica &rarr;</a>
                </div>
            @endif
        </div>


{{--        <div class="all-posts">--}}
{{--            <h1>Sva moja putovanja</h1>--}}
{{--            @if(!empty($blogs))--}}
{{--            <ul>--}}
{{--                @foreach($blogs as $blog)--}}
{{--                    <li>--}}
{{--                        <a href="/blog/{{ $blog->slug }}">{{ $blog->created_at->format('d.m.y.') . ' - ' . $blog->title }}</a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--                    @foreach($blogs as $blog)--}}
{{--                        <li>--}}
{{--                            <Post image="{{ $blog->featured_image }}" url="{{ route('blogs.show', ['slug' => $blog->slug]) }}" title="{{ $blog->title }}"></Post>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}

{{--            </ul>--}}
{{--            @else--}}
{{--                <p>wow such empty</p>--}}
{{--            @endif--}}
{{--        </div>--}}

        <Foot></Foot>

    </div>
</body>
</html>
