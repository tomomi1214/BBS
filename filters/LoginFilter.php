<?php
    //セッションの中にLogin_userというキーワードで何か保存されていなければ
    require_once 'models/User.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    if($login_user === null){
        header('Location: index.php');
        exit;
    }