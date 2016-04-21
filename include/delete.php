<?php
require_once("inc.php");

if(isset($_POST['prod_id'])){
    $prod_id = $_POST['prod_id'];
    $result = query("DELETE FROM product WHERE ProdID={$prod_id}");
    confirm($result);
    echo "Hello";
}
?>