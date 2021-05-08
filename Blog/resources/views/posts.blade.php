<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ciubi's Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/app.css" />
        <script src="./js/app.js"></script>
    </head>
    <body>
        @foreach($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <div> {{ $post->excerpt }} </div>
        </article>
        @endforeach
    </body>
</html>
