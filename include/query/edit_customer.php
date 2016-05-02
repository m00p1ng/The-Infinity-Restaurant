<?php
require_once("../inc.php");
if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];
    $result = query("SELECT * FROM customer WHERE CustID={$id}") or die("MySQL error");
    confirm($result);
    
    if($result){
        $row = fetch_array($result);
        $firstname = $row['CustFirstName'];
        $lastname = $row['CustLastName'];
        $gender = $row['CustGender'];
        $birthday = $row['CustDOB'];
        $users = query("SELECT * FROM user WHERE UserID={$row['CustUser']}");
        $user = fetch_array($users);
        $username = $user['Username'];
        $phone = $row['CustPhone'];
        $email = $user['UserEmail'];
        $street = $row['CustStreet'];
        $city = $row['CustCity'];
        $state = $row['CustState'];
        $zip = $row['CustZip'];
        
        echo $firstname . ".,." . $lastname . ".,." . $gender . ".,." . $birthday . ".,." . $username . ".,." . $phone . ".,." . $email . ".,." . $street . ".,." . $city . ".,." . $state . ".,." . $zip;
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>