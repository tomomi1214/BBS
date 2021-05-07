<?php
    //C
    //var_dump($_POST);
    require_once 'DAOs/CommentDAO.php';
    //require_once 'models/Comment.php';
    
    $post_id = $_POST['post_id'];
    $content = $_POST['content'];
    session_start();
    $login_user = $_SESSION['login_user'];
    
    //Commentインスタンスを新規作成
    $comment = new Comment($login_user->id, $post_id, $content);
    //var_dump($comment);
    //CommentDAOを使用してデータベースに保存
    CommentDAO::insert($comment);
    
    //表示
    header('Location: message_show.php?id=' . $post_id);
    exit;