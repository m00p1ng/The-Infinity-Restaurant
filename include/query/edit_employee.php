<?php
require_once("../inc.php");
if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];
    $result = query("SELECT * FROM employee WHERE EmpID={$id}");
    confirm($result);
    
    if($result){
        $row = fetch_array($result);
        $firstname = $row['EmpFirstName'];
        $lastname = $row['EmpLastName'];
        $gender = $row['EmpGender'];
        $birthday = $row['EmpDOB'];
        $users = query("SELECT * FROM User WHERE UserID={$row['EmpUser']}");
        $user = fetch_array($users);
        $username = $user['Username'];
        $address = $row['EmpAddress'];
        $phone = $row['EmpPhone'];
        $position = $row['EmpPosition'];
        $status = $row['EmpStatus'];
        $note = $row['EmpNote'];
        $email = $user['UserEmail'];
        
        echo $firstname . ".,." . $lastname . ".,." . $gender . ".,." . $birthday . ".,." . $username . ".,." . $address . ".,." . $phone . ".,." . $position . ".,." . $status . ".,." . $note . ".,." . $email;
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>