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
        <?php foreach($posts as $post) : ?>
        <article>
            <h1><a href="#"></a></h1>
            <p></p>
        </article>

        <?php endforeach;?>
        <article>
            <h1><a href="/posts/my-first-post">My First Post</a></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quo unde in exercitationem voluptatum impedit et veritatis sapiente temporibus! Placeat autem dolores minima corrupti beatae itaque dolore iste velit dolorum.</p>
        </article>

        <article>
            <h1><a href="/posts/my-second-post">My Second Post</a></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quo unde in exercitationem voluptatum impedit et veritatis sapiente temporibus! Placeat autem dolores minima corrupti beatae itaque dolore iste velit dolorum.</p>
        </article>

        <article>
            <h1><a href="/posts/my-third-post">My Third Post</a></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quo unde in exercitationem voluptatum impedit et veritatis sapiente temporibus! Placeat autem dolores minima corrupti beatae itaque dolore iste velit dolorum.</p>
        </article>
    </body>
</html>