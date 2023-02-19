<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Home</title>
</head>
<body>
    <h1>Welcome to Home</h1>

    <a href="{{ route('blog') }}">投稿する</a>
    
    <form action="{{ route('logout') }}" method="post">
        {{ csrf_field() }}
        <button type="submit">ログアウトする</button>
    </form>

    <button onclick="location.href='{{ route('blog') }}'">投稿する</button>

    <button onclick="location.href='{{ route('blogs') }}'">一覧を見る</button>
</body>
</html>