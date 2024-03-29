<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ブログ一覧</title>
</head>
<body>
    <h1>blog crud</h1>
    <p>マイページ一覧</p>

    <table border="3" cellpadding="6" cellspacing="0">
        <caption>マイページブログ一覧</caption>
        <tr>
            <th>本文</th>
            <th>作成日</th>
        </tr>
        <tr>
            <td>{{ $blog->body }}</td>
            <td>{{ $blog->created_at }}</td>
        </tr>
    </table>

    <form action="{{ route('blogs.edit',$blog->id) }}" method="get">
        {{ csrf_field() }}
        <button type="submit">編集する</button>
    </form>

    <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
        {{ csrf_field() }}
        <button type="submit">削除する</button>
    </form>

</body>

</html>