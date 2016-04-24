<?php
require_once("../inc.php");

$errors = [];

if(isset($_SESSION['userrole']) && ($_SESSION['userrole'] == 'Admin' ||$_SESSION['userrole'] == 'Employee')){
    if(isset($_POST['name']) && isset($_POST['picture']) && isset($_POST['price']) && isset($_POST['type']) && isset($_POST['text']) && isset($_POST['amount'])){
        $name = escape_string(clean($_POST['name']));
        $picture = escape_string(clean($_POST['picture']));
        $price = escape_string(clean($_POST['price']));
        $type = escape_string(clean($_POST['type']));
        $text = escape_string(clean($_POST['text']));
        $amount = escape_string(clean($_POST['amount']));

        if(empty($name)){
            $errors[] = "Name cannot empty";
        }
        else if(product_exist($name)){
            $errors[] = "Product already exist";
        }
        
        if(empty($picture)){
            $errors[] = "Picture cannot empty";
        }
        
        if(empty($price)){
            $errors[] = "Price cannot empty";
        }
        
        if(empty($amount)){
            $errors[] = "Amount cannot empty";
        }
        
        if(empty($type)){
            $errors[] = "Type cannot empty";
        }
        
        if(empty($text)){
            $errors[] = "Description cannot empty";
        }
        
        if(!empty($errors)){
            echo "
            <div class='ui error message'>
                <div class='header'>
                There was some errors with your product addition.
                </div>
                <ul class='list'>";
            foreach($errors as $error){
                echo "<li>{$error}</li>";
            }
            echo "</ul>
            </div>";
        }
        else{
            add_prod($name, $picture, $price, $type, $text, $amount);
            echo "Add product complete";
        }
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}

function add_prod($name, $picture, $price, $type, $text, $amount){
    $q = "INSERT INTO product(ProdName, ProdPicture, ProdPricePerUnit, ProdType, ProdDescription, ProdAmount) ";
    $q .= "VALUES('{$name}', '{$picture}', {$price}, '{$type}', '{$text}', {$amount})";
    $result = query($q);
    confirm($result);
}

function product_exist($product){
    $q = "SELECT ProdName FROM product WHERE ProdName='{$product}'";
    
    $result = query($q);
    if($result){
        if(row_count($result) == 1){
            return true;
        }
        return false;
    }
}
?>