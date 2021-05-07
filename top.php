<?php
    //C
    require_once 'filters/LoginFilter.php';
    require_once 'DAOs/UserDAO.php';
    require_once 'DAOs/PostDAO.php';
    session_start();
    
    $login_user = $_SESSION['login_user'];
    
    //PostDAOを使用して投稿一覧を取得
    $posts = PostDAO::get_all_posts();
    
    //var_dump($posts);
    
    //View表示
    include_once 'views/top_view.php';
    