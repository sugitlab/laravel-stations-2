<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN - Movies - Edit </title>
</head>

<body>
    <h1>Update Movie</h1>
    {{ $movie->title }}
    <form method="POST" action="/admin/movies/{{ $movie->id }}/update">
        @method('PATCH')
        @csrf
        <h2>映画タイトル</h2>
        <input type="text" name="title" value="{{ $movie->title }}">
        <h2>画像URL</h2>
        <input type="url" name="image_url" value="{{ $movie->image_url }}">
        <h2>公開年</h2>
        <input type="number" name="published_year" value="{{ $movie->published_year }}">
        <h2>公開中かどうか</h2>
        <input type="checkbox" name="is_showing" id="is_showing" value="1" value="{{ $movie->is_showing }}">
        <label for="is_showing">公開中かどうか</label>
        <h2>概要</h2>
        <input type="text" name="description" value="{{ $movie->description }}">
        <br>
        <br>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <input type="submit">
    </form>
</body>

</html>
