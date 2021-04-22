<?php
    //C
    require_once 'DAOs/PostDAO.php';
    require_once 'models/User.php';
    session_start();
    
    //var_dump($_POST);
    $title = $_POST['title'];
    $content =$_POST['content'];
    //print $title;
    //print $content;
    
    $image = $_FILES['image']['name'];
    //var_dump($_FILES);
    //print $image;
    
    $login_user = $_SESSION['login_user'];
    
    //データベースに投稿を保存
    $post = new Post($login_user->id, $title, $content, $image);
    //var_dump($post);
    PostDAO::insert($post);
    // 画像のフルパスを設定
    $file = 'upload/' . $image;

    // uploadディレクトリにファイル保存
    move_uploaded_file($_FILES['image']['tmp_name'], $file);