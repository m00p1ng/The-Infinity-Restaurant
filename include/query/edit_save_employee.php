<?php 
require_once("../inc.php");

$errors = [];
    
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = escape_string(clean($_POST['firstname']));
    $lastname = escape_string(clean($_POST['lastname']));
    $gender = escape_string(clean($_POST['gender']));
    $dob_day = escape_string(clean($_POST['dob_day']));
    $dob_month = escape_string(clean($_POST['dob_month']));
    $dob_year = escape_string(clean($_POST['dob_year']));
    $birthday = $dob_year."-".$dob_month."-".$dob_day;
    $address = escape_string(clean($_POST['address']));
    $email = escape_string(clean($_POST['email']));
    $phone = escape_string(clean($_POST['phone']));
    $position = escape_string(clean($_POST['position']));
    $status = escape_string(clean($_POST['status']));
    $note = escape_string(clean($_POST['note']));
    $id = escape_string(clean($_POST['id']));

    // Handling Firstname and Lastname
    if(empty($firstname)){
        $errors[] = "Firstname cannot empty";
    }
    else if(strlen($firstname) < 2){
        $errors[] = "Firstname cannot be less than 2 characters";
    }
    else if(strlen($firstname) > 20){
        $errors[] = "Firstname cannot be more tahn 20 charracters";
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
        $errors[] = "Firstname can only contain letters"; 
    }

    if(empty($lastname)){
        $error[] = "Lastname cannot empty";
    }
    else if(strlen($lastname) < 2){
        $errors[] =  "Lastname cannot be less than 2 characters";
    }
    else if(strlen($lastname) > 20){
        $errors[] = "Lastname cannot be more tahn 20 charracters";
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
        $errors[] = "Lastname can only contain letters"; 
    }

    // Handling Gender
    if(empty($gender)){
        $errors[] = "Gender cannot empty";
    }

    // Handling Birthday
    if(empty($dob_day) || empty($dob_month) || empty($dob_year)){
        $errors[] = "Birtyday cannot empty";
    }
    else if(!checkdate($dob_month, $dob_day, $dob_year)){
        $errors[] = "Please enter valid birthday";
    }   

    // Handling Address
    if(empty($address)){
        $errors[] = "Address cannot empty";
    }
    else if(strlen($address) < 10){
        $errors[] = "Address cannot be less than 10 characters";
    }
    
    if(empty($phone)){
        $errors[] = "Phone number cannot empty";
    }
    else if(strlen($phone) < 9){
        $error[] = "Please enter valid number";
    }

    if(empty($email)){
        $errors[] = "Email cannot empty";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format"; 
    }
    
    //Employee segment
    if(empty($position)){
        $errors[] = "Position cannot empty";
    }
    
    if(empty($status)){
        $errors[] = "Status cannot empty";
    }

    if(!empty($errors)){
        echo "<div class='ui error message'>
            <div class='header'>
            There was some errors with your registration.
            </div>
            <ul class='list'>";
        foreach($errors as $error){
            echo "<li>{$error}</li>";
        }
        echo "</ul>
        </div>
        <br />";
    }
    else{
        $q = "UPDATE employee SET EmpFirstName='{$firstname}', EmpLastName='{$lastname}', EmpGender='{$gender}', EmpDOB='{$birthday}', EmpAddress='{$address}', EmpPhone='{$phone}', EmpPosition='{$position}', EmpStatus='{$status}', EmpNote='{$note}' WHERE EmpID={$id}";
        
        $result = query($q);
        
        $search1 = query("SELECT * FROM employee WHERE EmpID={$id}");
        $row = fetch_array($search1);
        
        $q1 = "UPDATE user SET UserEmail='{$email}' WHERE UserID={$row['EmpUser']}";
        $result1 = query($q1);
        
        echo "Registration complete";
    }
}

?>