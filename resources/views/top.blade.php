<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top</title>
</head>
<body>
    <h1>This is Top</h1>

    <form action="{{ route('login') }}" method="get">
        {{ csrf_field() }}
        <button type="submit">ログインする</button>
    </form>

    <form action="{{ route('register') }}" method="get">
        {{ csrf_field() }}
        <button type="submit">会員登録する</button>
    </form>
</body>
</html>