<?php
require_once('../inc.php');
if(isset($_POST['emp_id']) && isset($_POST['user_id'])){
    $emp_id = $_POST['emp_id'];
    $user_id = $_POST['user_id'];
    $result_cust = query("DELETE FROM employee WHERE EmpID='{$emp_id}'");
    $result_user = query("DELETE FROM user WHERE UserID='{$user_id}'");
    confirm($result_cust);
    confirm($result_user);
}
?>