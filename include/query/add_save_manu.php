<?php 
require_once("../inc.php");

$name = $_POST['name'];
$address= $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO manufacturer(ManuName, ManuAddress, ManuEmail, ManuPhone) ";
$query .= "VALUES('{$name}', '{$address}', '{$email}', '{$phone}')";

$result = query($query);
confirm($result);

if($result){
    echo "add manu complete";
}
else{
    echo "failed";
}
?>