<?php 
require_once("../inc.php");
    
if($_GET["prod_id"]){
    $p_id = $_GET["prod_id"];
    $q = "SELECT * FROM product WHERE ProdID = {$p_id}";
    $result = query($q);
    $row = fetch_array($result);
    $prodname = $row['ProdName'];
    $prodpic = $row['ProdPicture'];
    $proddesc = $row['ProdDescription'];
    echo $prodname . ".,." . $prodpic . ".,." . $proddesc;
}
?>