<?php 
require_once("../inc.php");

$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO manufacturer(ManuName, ManuStreet, ManuCity, ManuState, ManuZip, ManuEmail, ManuPhone) ";
$query .= "VALUES('{$name}', '{$street}', '{$city}', '{$state}', '{$zip}', '{$email}', '{$phone}')";

$result = query($query);
confirm($result);

if($result){
    echo "add manu complete";
}
else{
    echo "failed";
}
?>