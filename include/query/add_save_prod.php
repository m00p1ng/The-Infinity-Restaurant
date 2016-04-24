<?php
include_once("../inc.php");
if(isset($_SESSION['userrole']) && ($_SESSION['userrole'] == 'Admin' ||$_SESSION['userrole'] == 'Employee')){
    if(isset($_POST['name']) && isset($_POST['picture']) && isset($_POST['price']) && isset($_POST['type']) && isset($_POST['text']) && isset($_POST['amount'])){
        $name = escape_string(clean($_POST['name']));
        $picture = escape_string(clean($_POST['picture']));
        $price = escape_string(clean($_POST['price']));
        $type = escape_string(clean($_POST['type']));
        $text = escape_string(clean($_POST['text']));
        $amount = escape_string(clean($_POST['amount']));

        $q = "INSERT INTO product(ProdName, ProdPicture, ProdPricePerUnit, ProdType, ProdDescription, ProdAmount) ";
        $q .= "VALUES('{$name}', '{$picture}', {$price}, '{$type}', '{$text}', {$amount})";
        $result = query($q);
        confirm($result);
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>