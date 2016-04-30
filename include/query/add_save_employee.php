<?php 
require_once("../inc.php");

$errors = [];
    
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = clean($_POST['username']);
    $password = clean($_POST['password']);
    $con_password = clean($_POST['con_password']);
    $firstname = clean($_POST['firstname']);
    $lastname = clean($_POST['lastname']);
    $gender = clean($_POST['gender']);
    $dob_day = clean($_POST['dob_day']);
    $dob_month = clean($_POST['dob_month']);
    $dob_year = clean($_POST['dob_year']);
    $birthday = $dob_year."-".$dob_month."-".$dob_day;
    $address = clean($_POST['address']);
    $email = clean($_POST['email']);
    $phone = clean($_POST['phone']);
    $position = clean($_POST['position']);
    $status = clean($_POST['status']);;
    $note = clean($_POST['note']);;

    // Handling username
    if(empty($username)){
        $errors[] = "Username cannot empty";
    }
    else if(strlen($username) < 5){
        $errors[] = "Username cannot be less than 5 characters";
    }
    else if(strlen($username) > 20){
        $errors[] = "Username cannot be more tahn 20 charracters";
    }
    else if(username_exist($username)){
        $errors[] = "Sorry This username already exist";
    }

    // Handling password
    if(empty($password)){
        $errors[] = "Password cannot empty";
    }
    else if(strlen($password) < 8){
        $errors[] =  "Password cannot be less than 8 characters";
    }
    else if(strlen($password) > 50){
        $errors[] =  "Password cannot be less than 50 characters";
    }
    else if($password != $con_password){
        $errors[] =  "The confirmation password does not match the password";
    }

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
        register_user($username, $password, $email);
        
        echo "Registration complete";
    }

}

function username_exist($username){
    $q = "SELECT UserID FROM user WHERE Username = '{$username}'";
    
    $result = query($q);
    if($result){
        if(row_count($result) == 1){
            return true;
        }
        return false;
    }
}

function register_user($username, $password, $email){
    $username = escape_string($username);
    $password = escape_string($password);
    $email = escape_string($email);
    
    global $firstname;
    global $lastname;
    global $birthday;
    global $phone;
    global $gender;
    global $address;
    global $position;
    global $status;
    global $note;
    
    if(username_exist($username)){
        return false;
    }
    else {
        $password = md5($password);
        $q = "INSERT INTO user(Username, UserPassword, UserEmail, UserRole) ";
        $q .= "VALUES('$username', '$password', '$email', 'Employee')";
        $result = query($q);
        confirm($result);
        information_user($firstname, $lastname, $gender, $birthday, $phone, $username, $address, $position, $status, $note);
    }
}

function information_user($firstname, $lastname, $gender, $birthday, $phone, $username, $address, $position, $status, $note){
    $firstname = escape_string($firstname);
    $lastname = escape_string($lastname);
    $gender = escape_string($gender);
    $birthday = escape_string($birthday);
    $phone = escape_string($phone);
    $username = escape_string($username);
    $address = escape_string($address);
    $position = escape_string($position);
    $status = escape_string($status);
    $note = escape_string($note);

    $q = "SELECT * FROM user WHERE Username = '{$username}'";
    $result = query($q);
    if($result){
        $row = fetch_array($result);
    }
    $userid = $row['UserID'];

    $q = "INSERT INTO employee(EmpFirstName, EmpLastName, EmpGender, EmpDOB, EmpAddress, EmpPhone, EmpUser, EmpPosition, EmpStatus, EmpNote)";
    $q .= " VALUES('{$firstname}', '{$lastname}', '{$gender}', '{$birthday}', '{$address}', '{$phone}', {$userid}, '{$position}', '{$status}', '{$note}')";
    $result = query($q);
    confirm($result);
    
}
?>