<!DOCTYPE html>
<html lag="ja">
    <head>
        <meta charset="utf-8">
        <title><?=$post->id ?>番目の投稿詳細</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1><?=$post->id ?>番目の投稿詳細</h1>
        <div>
            <ul>
                <li><?= $post->id ?></li>
                <li><?= $post->user()->name ?></li>
                <li><?= $post->title ?></li>
                <li><?= $post->content ?></li>
                <li><img src="upload/<?= $post->image ?>"></li>
                </ul>
        </div>
        <!--その投稿にいいねしていなければ-->
        <?php if(!$post->is_favorite($login_user)): ?>
        <form action="favorite_create.php" method="POST">
            <input type="hidden" name="post_id" value="<?= $post->id ?>">
            <button type="submit">いいね</button>
        </form>
        <?php else: ?>
        <form action="favorite_delete.php" method="POST">
            <input type="hidden" name="post_id" value="<?= $post->id ?>">
            <button type="submit">いいね解除</button>
        </form>
        <?php endif; ?>
        
        <p><?= $count ?>いいね</p>
        <h2>コメント投稿</h2>
        <form action="comment_create.php" method="POST">
            <input type="text" name="content"><br>
            <input type="hidden" name="post_id" value="<?= $post->id ?>">
            <button type="submit">投稿</button>
        </form>
        
        <h2>コメント一覧</h2>
        <?php if(count($comments) !==0): ?>
        <p>コメント件数：<?= count($comments) ?>件</p>
        <ul>
            <?php foreach($comments as $comment): ?>
            <li><?= $comment->user()->name ?>: <?= $comment->content ?></li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
        <p>コメントはまだありません</p>
        <?php endif; ?>
        
        <p><a href="top.php">投稿一覧に戻る</a></p>
    </body>
</html>