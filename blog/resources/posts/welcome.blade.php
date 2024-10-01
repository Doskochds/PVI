<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна сторінка</title>
</head>
<body>
    <h1>Ласкаво просимо до блогу!</h1>
    
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>

        <h3>Коментарі</h3>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->body }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
