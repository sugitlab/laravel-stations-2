<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN - Movies</title>
</head>

<style>
    .button {
        background-color:lightblue;
        border: solid 1px;
        padding: 8px;
        text-decoration: none;
    }
</style>

<body>
    <h2>映画一覧</h2>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>映画タイトル</td>
                <td>画像URL</td>
                <td>公開年</td>
                <td>上映中かどうか</td>
                <td>概要</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->title }}</td>
                <td><img src="{{$movie->image_url}}" height="50" /></td>
                <td>{{ $movie->published_year }}</td>
                <td>{{ $movie->is_showing }}</td>
                <td>{{ $movie->description }}</td>
                <td>
                    <a href="{{ route('admin.movies.edit', $movie->id ) }}">EDIT</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="button" href="{{ route('admin.movies.create') }}">新規登録</a>
</body>

</html>
