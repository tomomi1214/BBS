<?php
    //外部ファイルの読み込み
    require_once 'DAOs/UserDAO.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new User($name, $email, $password);
    
    //DAOを使用して新規ユーザをデータベースに保存する
    UserDAO::insert($user);
        
    //画面遷移
    header('Location: index.php');
    exit;
    
    