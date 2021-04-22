<?php
    //外部ファイルの読み込み
    require_once 'DAOs/UserDAO.php';
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //DAOを使用して、ユーザがいるかDBを検索
    //いれば、そのユーザのインスタンスを取得
    $login_user = UserDAO::login($email, $password);
    
    //そんな人がDBに存在すれば
    if($login_user !== false){
        $_SESSION['login_user'] = $login_user;
        
        header('Location: top.php');
        exit;
    }else{
        header('Location: login.php');
        exit;
    }