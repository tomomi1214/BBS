<?php
    //C
    require_once 'DAOs/PostDAO.php';
    require_once 'DAOs/CommentDAO.php';
    require_once 'models/User.php';
    require_once 'DAOs/FavoriteDAO.php';
    session_start();
    //var_dump($_GET);
    $id = $_GET['id'];
    
    //PostDAOを用いてPostインスタンスを取得
    $post = PostDAO::find($id);
    //var_dump($post);
    
    $login_user = $_SESSION['login_user'];
    //今注目している投稿に対するコメント一覧取得
    $comments = CommentDAO::get_all_comments_by_post_id($id);
    
    //var_dump($comments);
    //表示
    
    //$favorite = FavoriteDAO::check($login_user->id, $id);
    //var_dump($favorite);
    
    //その投稿にいいねしている人数をDAOを使って求める
    $count = FavoriteDAO::count_favorites($id);
    //var_dump($favorites);
    
    include_once 'views/message_show_view.php';