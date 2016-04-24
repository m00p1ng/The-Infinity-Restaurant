<?php
include_once("inc.php");
if(isset($_SESSION['userrole']) && ($_SESSION['userrole'] == 'Admin' ||$_SESSION['userrole'] == 'Employee')){
    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['picture']) && isset($_POST['amount']) && isset($_POST['price']) && isset($_POST['type']) && isset($_POST['text'])){
        $id = escape_string(clean($_POST['id']));
        $name = escape_string(clean($_POST['name']));
        $picture = escape_string(clean($_POST['picture']));
        $price = escape_string(clean($_POST['price']));
        $amount = escape_string(clean($_POST['amount']));
        $type = escape_string(clean($_POST['type']));
        $text = escape_string(clean($_POST['text']));

        $result = query("UPDATE product SET ProdName='{$name}', ProdPicture='{$picture}', ProdPricePerUnit={$price}, ProdAmount={$amount}, ProdType='{$type}', ProdDescription='{$text}' WHERE ProdID={$id}");
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>