<?php
include_once("inc.php");
if(isset($_SESSION['userrole']) && ($_SESSION['userrole'] == 'Admin' ||$_SESSION['userrole'] == 'Employee')){
    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['picture']) && isset($_POST['amount']) && isset($_POST['price']) && isset($_POST['type']) && isset($_POST['text'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $picture = $_POST['picture'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];
        $type = $_POST['type'];
        $text = $_POST['text'];

        $result = query("UPDATE product SET ProdName='{$name}', ProdPicture='{$picture}', ProdPricePerUnit={$price}, ProdAmount={$amount}, ProdType='{$type}', ProdDescription='{$text}' WHERE ProdID={$id}");
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>