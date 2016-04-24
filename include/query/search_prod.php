<?php
require_once('../inc.php');

if(isset($_GET['name'])){
    $name = $_GET['name'];
    $query = query("SELECT * FROM product WHERE ProdName LIKE '%{$name}%' ORDER BY ProdID DESC");
    confirm($query);
    
    if($query){
        if(row_count($query) != 0){
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
        else{
            echo '
            <div class="center aligned">
                <br />
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOT FOUND</h1>
                <br />
            </div>
            ';
        }
    }
}
?>