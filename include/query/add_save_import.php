<?php
require_once("../inc.php");
$import_day = $_POST['import_day'];
$import_month = $_POST['import_month'];
$import_year = $_POST['import_year'];
$import_hour = $_POST['import_hour'];
$import_minute = $_POST['import_minute'];
$import_cost = $_POST['import_cost'];
$import_note = $_POST['import_note']; 
$import_product = $_POST['import_product'];
$import_amount = $_POST['import_amount'];
$import_manu = $_POST['import_manu'];

$import_date = $import_year.$import_month.$import_day;
$import_time = $import_hour.":".$import_minute.":00";

$prod_name = [];
$prod_price = [];
$total_prod_price = 0;
for($i = 0; $i < 10; $i++){
    if(!empty($import_product[$i]) && !empty($import_amount[$i]) && !empty($import_manu[$i])){
        $id = $import_product[$i];
        $amount =$import_amount[$i];
        
        $result = query("SELECT ProdName, ProdPricePerUnit FROM product WHERE ProdID={$id}");
        
        $row = fetch_array($result);
        $prod_price[] = $row['ProdPricePerUnit'] * $amount;
        $total_prod_price += $row['ProdPricePerUnit'] * $amount;
        $prod_name[] = $row['ProdName'];
        
        $result = query("UPDATE product SET ProdAmount=ProdAmount+{$amount} WHERE ProdID={$id}");
    }
}

$query1 = "INSERT INTO importlist(ImpTime, ImpDate, ImpReceiverID, ImpImportCost, ImpTotalCost, ImpNote) ";
$query1 .= "VALUES('{$import_time}', '{$import_date}', 999999999, {$import_cost}, {$total_prod_price}, '{$import_note}')";

$result = query($query1);
confirm($result);

for($i = 0; $i < sizeof($prod_price); $i++){
    $prod_id = $import_product[$i];
    $amount = $import_amount[$i];
    $manu = $import_manu[$i];

    $result = query("SELECT ImpID FROM importlist ORDER BY ImpID DESC LIMIT 1");
    confirm($result);
    $row = fetch_array($result);
    
    $query2 = "INSERT INTO productimport(ProdImProdID, ProdImImpID, ProdImAmount, ProdImManuID, ProdImCost) ";
    $query2 .= "VALUES({$prod_id}, {$row['ImpID']}, {$prod_price[$i]}, {$manu}, {$import_cost})";
    
    $result2 = query($query2);
    confirm($result2);
}

?>