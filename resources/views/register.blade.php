<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>登録フォーム</title>
</head>
<body>
    <form action="{{ route('register') }}"  method="post">
        {{ csrf_field() }}
        <dl>
            <dt>ユーザー名</dt>
            <dd><input type="text" name="name" size="30"></dd>
        </dl>
        <dl>
            <dt>メールアドレス</dt>
            <dd><input type="email" name="email" size="30"></dd>
        </dl>
        <dl>
            <dt>パスワード</dt>
            <dd><input type="password" name="password" size="30"></dd>
        </dl>
        <dl>
            <dt>パスワード確認</dt>
            <dd><input type="password" name="password_confirmation" size="30"></dd>
        </dl>
        <button type="submit" name='action'>登録</button>
    </form>
</body>

</html>
