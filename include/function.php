<?php
function redirect($location){
    header("Location: {$location}");
}

function clean($string){
    return htmlentities($string);
}

function set_message($message){
    if(!empty($message)){
        $_SESSION['message'] = $message;
    }
    else{
        $message = "";
    }
}

function row_count($result){
    return mysqli_num_rows($result);
}

function display_message($message){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function token_generator(){
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
}

function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;
    if(!$result){
        die("Query Failed".mysqli_error($connection)); 
    }
}

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

function logged_in(){
    return isset($_SESSION['username']) || isset($_COOKIE['username']);
}
?>