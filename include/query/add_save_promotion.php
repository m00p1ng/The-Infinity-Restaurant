<?php 
require_once("../inc.php");

$name = $_POST['name'];
$cutprice = $_POST['cutprice'];
$promo_day = $_POST['promo_day'];
$promo_month = $_POST['promo_month'];
$promo_year = $_POST['promo_year'];
$date = $promo_year . '-' . $promo_month . '-' . $promo_day; 

$query = "INSERT INTO promotion(PromoName, PromoCutPrice, PromoInterval) ";
$query .= "VALUES('{$name}', '{$cutprice}', '{$date}')";

$result = query($query);
confirm($result);

if($result){
    echo "add promo complete";
}
else{
    echo "failed";
}
?>