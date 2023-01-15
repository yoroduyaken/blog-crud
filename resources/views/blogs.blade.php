<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
</head>
<body>
    <h1>blog crud</h1>
    <p>ようこそ マイページへ</p>
    
    <table border="3" cellpadding="6" cellspacing="0">
        <caption>ブログ一覧</caption>
        <tr>
            <th>タイトル(用途)</th>
            <th>本文</th>
            <th>作成日</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->body }}</td>
            <td>{{ $blog->created_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>