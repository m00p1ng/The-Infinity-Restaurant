<?php 
require_once("../inc.php");

$errors = [];
    
if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
    $card_type = clean($_POST['card_type']);
    $card_number = clean($_POST['card_number']);
    $card_cvc = clean($_POST['card_cvc']);
    $exp_month = clean($_POST['exp_month']);
    $exp_year = clean($_POST['exp_year']);
    $expire = $exp_month."/".$exp_year;
    $id = clean($_POST['id']);

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
        $q = "UPDATE customer SET CustFirstName='{$firstname}', CustLastName='{$lastname}', CustGender='{$gender}', CustDOB='{$birthday}', CustAddress='{$address}', CustPhone='{$phone}', CustCreditType='{$card_type}', CustCreditID='{$card_number}', CustCreditExp='{$expire}' WHERE CustID={$id}";
        
        $result = query($q);
        
        $search1 = query("SELECT * FROM customer WHERE CustID={$id}");
        $row = fetch_array($search1);
        
        $q1 = "UPDATE user SET UserEmail='{$email}' WHERE UserID={$row['CustUser']}";
        $result1 = query($q1);
        
        echo "Registration complete";
    }
}
?>