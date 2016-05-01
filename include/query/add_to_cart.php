<?php 
require_once("../inc.php");

if(!isset($_SESSION['check_prod'])){
    $_SESSION['check_prod'] = [];
}

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
        $_SESSION['product_total'] += $total_price;
        $add_prod = "
        <div class='ui message'>
            <i class='close icon'></i>
            <div class='header'>
                {$row['ProdName']} <span id='amount_{$id}' value='{$amount}'>( {$amount} )</span>
            </div>
            <p>Total: ฿ <span id='total_{$id}' value='{$total_price}'>{$total_price}</span></p>
        </div>";

        echo "
        <div class='ui success message' data-value='{$id}'>
            <div class='header'>
            Item was added in your cart
            </div>
        </div>
        <p></p>.,.1" . ".,." . $add_prod . ".,." . $_SESSION['product_total'];
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