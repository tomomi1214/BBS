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
        <div>
            <?php foreach($posts as $post): ?>
            <ul>
                <li><a href="message_show.php?id=<?= $post->id ?>"><?= $post->id ?></a></li>
                <li><?= $post->user()->name ?></li>
                <li><?= $post->title ?></li>
                <li><?= $post->content ?></li>
                <li><img src="upload/<?= $post->image ?>"></li>
                            </ul>
            <?php endforeach; ?>
        </div>
        
        
        <p><a href="message_new.php">新規投稿</a></p>
        <p><a href="logout.php">ログアウト</a></p>
    </body>
</html>