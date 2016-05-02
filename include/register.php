<?php 
require_once("inc.php");

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
    $street = clean($_POST['street']);
    $city = clean($_POST['city']);
    $state = clean($_POST['state']);
    $zip = clean($_POST['zip']);
    $email = clean($_POST['email']);
    $phone = clean($_POST['phone']);
    $card_type = clean($_POST['card_type']);
    $card_number = clean($_POST['card_number']);
    $card_cvc = clean($_POST['card_cvc']);
    $exp_month = clean($_POST['exp_month']);
    $exp_year = clean($_POST['exp_year']);
    $expire = $exp_month."/".$exp_year;

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

    if(empty($email)){
        $errors[] = "Email cannot empty";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format"; 
    }

    // Handling Card
    if(empty($card_type)){
        $errors[] = "Please select card type";
    }

    if(empty($card_number)){
        $errors[] = "Card number cannot empty";
    }
    else if(preg_match ("/[^0-9]/", $card_number)){
        $errors[] = "Card number can contain only number";
    }
    else if(strlen($card_number) < 16){
        $errors[] = "Please enter valid Card number";
    }
    
    if(empty($card_cvc)){
        $errors[] = "CVC cannot empty";
    }
    else if(preg_match ("/[^0-9]/", $card_cvc)){
        $errors[] = "CVC can contain only number";
    }
    else if(strlen($card_cvc) < 3){
        $errors[] = "Please enter valid CVC";
    }

    if(empty($exp_month) || empty($exp_year)){
        "Expiration cannot empty";
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
    global $card_type;
    global $card_number;
    global $expire;
    global $gender;
    global $street;
    global $city;
    global $state;
    global $zip;
    
    if(username_exist($username)){
        return false;
    }
    else {
        $password = md5($password);
        $q = "INSERT INTO user(Username, UserPassword, UserEmail, UserRole) ";
        $q .= "VALUES('$username', '$password', '$email', 'Customer')";
        $result = query($q);
        confirm($result);
        information_user($firstname, $lastname, $gender, $birthday, $phone, $username, $street, $city, $state, $zip, $card_type, $card_number, $expire);
    }
}

function information_user($firstname, $lastname, $gender, $birthday, $phone, $username, $street, $city, $state, $zip, $card_type, $card_number, $expire){
    $firstname = escape_string($firstname);
    $lastname = escape_string($lastname);
    $gender = escape_string($gender);
    $dob = escape_string($birthday);
    $phone = escape_string($phone);
    $username = escape_string($username);
    $street = escape_string($street);
    $city =escape_string($city);
    $state = escape_string($state);
    $zip = escape_string($zip);
    $credit_type = escape_string($card_type);
    $credit_id = escape_string($card_number);
    $expire = escape_string($expire);
    

    $q = "SELECT * FROM user WHERE Username = '{$username}'";
    $result = query($q);
    if($result){
        $row = fetch_array($result);
    }
    $userid = $row['UserID'];

    $q = "INSERT INTO customer(CustFirstName, CustLastname, CustGender, CustDOB, CustPhone, CustUser, CustCreditType, CustCreditID, CustCreditExp, CustStreet, CustCity, CustState, CustZip)";
    $q .= " VALUES('$firstname', '$lastname', '$gender', '$dob', '$phone', '$userid', '$credit_type', '$credit_id', '$expire', '$street', '$city', '$state', '$zip')";
    $result = query($q);
    confirm($result);
    
}
?>