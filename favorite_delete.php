<?php
    //C
    //var_dump($_POST);
    require_once 'models/User.php';
    require_once 'DAOs/FavoriteDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    //var_dump($login_user);
    
    $post_id = $_POST['post_id'];
    
    //DAOを使用してDBから削除
    FavoriteDAO::delete($login_user->id, $post_id);
    
    header('Location: message_show.php?id=' . $post_id);
    exit;