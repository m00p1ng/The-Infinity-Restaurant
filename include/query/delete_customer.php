<?php
require_once('../inc.php');
if(isset($_POST['cust_id']) && isset($_POST['user_id'])){
    $cust_id = $_POST['cust_id'];
    $user_id = $_POST['user_id'];
    $result_cust = query("DELETE FROM customer WHERE CustID='{$cust_id}'");
    $result_user = query("DELETE FROM user WHERE UserID='{$user_id}'");
    confirm($result_cust);
    confirm($result_user);
}
?>