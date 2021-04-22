<!DOCTYPE html>
<html lag="ja">
    <head>
        <meta charset="utf-8">
        <title>MyPage</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>MyPage</h1>
        <p><?= $login_user->name ?>さん、ようこそ！</p>
        <p><a href="message_new.php">新規投稿</a></p>
        <p><a href="logout.php">ログアウト</a></p>
    </body>
</html>