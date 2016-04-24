<?php 
require_once("../inc.php");

if(isset($_GET['prod_id']) && isset($_GET['prod_amount'])){
    $id = escape_string(clean($_GET['prod_id']));
    $amount = escape_string(clean($_GET['prod_amount']));
    
    if(!isset($_SESSION['product_' . $id])){
        $_SESSION['product_' . $id] = 0;
    }
    
    $result = query("SELECT * FROM product WHERE ProdID={$id}");
    confirm($result);
    
    $row = fetch_array($result);
    if($row['ProdAmount'] >= ($_SESSION['product_' . $id] + $amount)){
        $_SESSION['product_' . $id] += $amount;
        $total_price = $amount*$row['ProdPricePerUnit'];
        $add_prod = "
        <div class='ui message'>
            <i class='close icon'></i>
            <div class='header'>
                {$row['ProdName']} ( {$amount} )
            </div>
            <p>Total: \${$total_price}</p>
        </div>";

        echo "
        <div class='ui success message'>
            <div class='header'>
            Item was added in your cart
            </div>
        </div>
        <p></p>.,.1" . ".,." . $add_prod;
    }
    else{
        echo "
        <div class='ui error message'>
            <div class='header'>
            We have only {$row['ProdAmount']} in stock
            </div>
        </div>
        <p></p>.,.0";
    }
}
?>