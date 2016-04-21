<?php
require_once("inc.php");
if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];
    $result = query("SELECT * FROM product WHERE ProdID={$id}");
    confirm($result);
    
    if($result){
        $row = fetch_array($result);
        $name = $row['ProdName'];
        $picture = $row['ProdPicture'];
        $price = $row['ProdPricePerUnit'];
        $amount = $row['ProdAmount'];
        $type = $row['ProdType'];
        $description = $row['ProdDescription'];
        
        echo $name . ".,." . $picture . ".,." . $price . ".,." . $amount . ".,." . $type . ".,." . $description;
    }
}
else{
    echo "<h1>เสือก!!!!</h1>";
}
?>