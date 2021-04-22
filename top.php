<?php
    //C
    require_once 'filters/LoginFilter.php';
    require_once 'DAOs/UserDAO.php';
    session_start();
    
    $login_user = $_SESSION['login_user'];
    
    //View表示
    include_once 'views/top_view.php';
    