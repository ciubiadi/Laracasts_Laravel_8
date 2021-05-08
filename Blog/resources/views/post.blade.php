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
    <body class="antialiased">

        <article>
            <h1><?= $post->title; ?></h1>

            <div>
                <?= $post->body; ?> </div>
            </div>
        </article>

        <a href="/">Go back</a>
    </body>
</html>