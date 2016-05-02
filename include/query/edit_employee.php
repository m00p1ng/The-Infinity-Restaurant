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
        $users = query("SELECT * FROM user WHERE UserID={$row['EmpUser']}");
        $user = fetch_array($users);
        $username = $user['Username'];
        $phone = $row['EmpPhone'];
        $position = $row['EmpPosition'];
        $status = $row['EmpStatus'];
        $note = $row['EmpNote'];
        $email = $user['UserEmail'];
        $street = $row['EmpStreet'];
        $city = $row['EmpCity'];
        $state = $row['EmpState'];
        $zip = $row['EmpZip'];
        
        echo $firstname . ".,." . $lastname . ".,." . $gender . ".,." . $birthday . ".,." . $username . ".,." . $phone . ".,." . $position . ".,." . $status . ".,." . $note . ".,." . $email . ".,." . $street . ".,." . $city . ".,." . $state . ".,." . $zip;
    }
    else {
        die();
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>