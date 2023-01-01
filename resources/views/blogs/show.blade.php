<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ブログ一覧</title>
</head>
<body>
<h1>blog crud</h1>
        <p>マイページ一覧</p>
    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <table border="3" cellpadding="6" cellspacing="0">
        <caption>マイページブログ一覧</caption>
    <tr>
        <th>本文</th>
        <th>作成日</th>
    </tr>
    
    @foreach ($blogs as $blog)
    <tr>
        <td>{{ $blog->body }}</td>
        <td>{{ $blog->created_at }}</td>
    </tr>
    @endforeach
    </table>

</body>

</html>