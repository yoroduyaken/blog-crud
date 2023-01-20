<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ログインフォーム</title>
</head>
<body>
    <h1>ログイン画面</h1>
    <form action="{{ route('login') }}"  method="post">
        {{ csrf_field() }}
        <dl>
            <dt>メールアドレス</dt>
            <dd><input type="email" name="email" size="30"></dd>
        </dl>
        <dl>
            <dt>パスワード</dt>
            <dd><input type="password" name="password" size="30"></dd>
        </dl>
        <button type="submit" name='action'>ログイン</button>
    </form>
</body>

</html>
