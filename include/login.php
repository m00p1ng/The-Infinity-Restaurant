<?php
require_once("inc.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $error;
    $username = clean($_POST['username']);
    $password = clean($_POST['password']);
    $remember = isset($_POST['remember']);
    
    if(empty($username) || empty($password)){
        $error = "Username or password cannot be empty";
    }
    else if(!login($username, $password, $remember)){
        $error = "Username or passwrod are incorrect";
    }
    else{
        echo"
        <div class='ui success message'>
            <div class='header'>Logged in!!</div>
            <p>Welcome to my restaurant</p>
        </div>.,.1";
    }
    
    if(!empty($error)){
        echo "
        <div class='ui negative message'>
            <div class='header'>Cannot Login</div>
            <p>{$error}</p>
        </div>.,.0";
    }
}

function login($username, $password, $remember){
    $username = escape_string($username);
    $password = escape_string($password);
    $q = "SELECT UserPassword, UserID, UserRole FROM user WHERE Username = '{$username}'";
    
    $result = query($q);
    
    if($result){
        if(row_count($result) == 1){
            $row = fetch_array($result);
            
            $db_password = $row['UserPassword'];
            $userrole = $row['UserRole'];
            if(md5($password) === $db_password){
                if($remember == 'on'){
                    setcookie('username', $username, time()+60*60*24);
                }
                
                $_SESSION['username'] = $username;
                $_SESSION['userrole'] = $userrole;
                return true;
            }
        }
        return false;
    }
}
?>