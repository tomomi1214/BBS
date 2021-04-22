<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>新規投稿</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>新規投稿</h1>
        <form action="message_create.php" method="POST" enctype="multipart/form-data">
            タイトル:<input type="text" name="title"><br>
            本文:<input type="text" name="content"><br>
            画像:<input type="file" name="image"><br>
            <button type="submit">投稿</button>
        </form>
        <p><a href="top.php">投稿一覧に戻る</a></p>

    </body>
</html>