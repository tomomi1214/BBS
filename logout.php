<?php
    //C
    session_start();
    $_SESSION['login_user'] = null;
    session_destroy();
    
    header('Location: index.php');
    exit;
    