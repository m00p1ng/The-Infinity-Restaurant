<?php require_once("inc.php");
    session_destroy();

    if(isset($_COOKIE['username'])){
        unset($_COOKIE['username']);
        setcookie('username', '', time() - 60*60*24);
    }
    redirect("../index.php");
?>