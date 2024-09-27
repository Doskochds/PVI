{{-- resources/views/posts/show.blade.php --}}

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <h2>Коментарі</h2>
    <ul>
        @foreach ($post->comments as $comment)
            <li>{{ $comment->body }}</li>
        @endforeach
    </ul>

    <h3>Додати коментар</h3>
    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf
        <textarea name="body" required></textarea>
        <button type="submit">Додати коментар</button>
    </form>

</body>
</html>
