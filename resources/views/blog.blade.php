<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <form action="{{ route('blog') }}"  method="post">
        {{ csrf_field() }}
    <h1>Blog Page</h1>
    <br>
    <input type="text" name="title" placeholder="題名を入力してください。">
    </br>

    <br>
    <textarea name="body" cols="30" rows="3" maxlength="1000" 
    placeholder="投稿してください。"></textarea>
    </br>

    <button type="submit">投稿</button>
    </form>
</body>
</html>