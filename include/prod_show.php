<?php
require_once("inc.php");

function get_product($type){
    if($type == ''){
        $query = query("SELECT * FROM product ORDER BY ProdID DESC");
    }
    else{
        $query = query("SELECT * FROM product WHERE ProdType='{$type}' ORDER BY ProdID DESC");
    }
    confirm($query);
    
    while($row = fetch_array($query)){
        $des_sub = substr($row['ProdDescription'], 0, 100);
        echo "
        <div class='card'>
            <div class='ui bottom right blue attached label'>\${$row['ProdPricePerUnit']}.00</div>
            <div class='blurring dimmable image'>
                <div class='ui dimmer'>
                    <div class='content'>
                        <div class='center'>
                            <button class='ui inverted button btn-def-modal' value='{$row['ProdID']}''>Desc.</button>
                            <button class='ui green inverted button btn-buy-modal' value='{$row['ProdID']}''>Buy</button>
                        </div>
                    </div>
                </div>
                <img src='{$row['ProdPicture']}'>
            </div>

            <div class='content'>
                <div class='header'>{$row['ProdName']}</div>

                <div class='description'>
                    <p>";?>
    <?php if(strlen($des_sub) >= 100) $des_sub .= ' ...'; echo $des_sub . "</p>
                </div>
            </div>
        </div>";
    }
}
?>