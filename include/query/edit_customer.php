<?php
require_once("../inc.php");
if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];
    $result = query("SELECT * FROM customer WHERE CustID={$id}");
    confirm($result);
    
    if($result){
        $row = fetch_array($result);
        $firstname = $row['CustFirstName'];
        $lastname = $row['CustLastName'];
        $gender = $row['CustGender'];
        $birthday = $row['CustDOB'];
        $users = query("SELECT * FROM User WHERE UserID={$row['CustUser']}");
        $user = fetch_array($users);
        $username = $user['Username'];
        $address = $row['CustAddress'];
        $phone = $row['CustPhone'];
        $email = $user['UserEmail'];
        
        echo $firstname . ".,." . $lastname . ".,." . $gender . ".,." . $birthday . ".,." . $username . ".,." . $address . ".,." . $phone . ".,." . $email;
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>