<?php
function redirect($location){
    header("Location: $location");
}

function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;
    if(!$result){
        die("Query Failed".mysqli_error($connection)); 
    }
}

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

function get_product(){
    $query = query("SELECT * FROM product");
    confirm($query);
    
    while($row = fetch_array($query)){
        $des_sub = substr($row['ProdDescription'], 0, 100);
        $product = <<<EOD
        <div class="card">
            <div class="ui bottom right blue attached label">\${$row['ProdPricePerUnit']}.00</div>
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <button class="ui inverted button btn-def-modal" value="{$row['ProdID']}">Desc.</button>
                            <button class="ui green inverted button btn-buy-modal" value="{$row['ProdID']}">Buy</button>
                        </div>
                    </div>
                </div>
                <img src="{$row['ProdPicture']}">
            </div>

            <div class="content">
                <div class="header">{$row['ProdName']}</div>

                <div class="description">
                    <p>{$des_sub}...</p>
                </div>
            </div>
        </div>
EOD;
        
        echo $product;
    }
}
?>