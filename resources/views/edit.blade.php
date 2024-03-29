<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Blog Edit Page</h1>
    <form action="{{ route('blogs.edit', $blog->id) }}"  method="post">
        {{ csrf_field() }}

        <br>
        <input type="text" name="title" placeholder="題名を入力してください。" value="{{ old('title', $blog->title) }}"> 
        <br>
        <textarea name="body" cols="30" rows="3" maxlength="1000" placeholder="投稿してください。">{{ old('body', $blog->body) }}</textarea>
        <button type="submit">更新</button>
    </form>
</body>
</html>