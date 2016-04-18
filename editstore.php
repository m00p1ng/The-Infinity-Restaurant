<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <body>
        <?php
        include("include/menubar.php");
        include("include/product_description.php");
        include("include/confirm_delete.php");
        ?>
            <div class="ui container">
                <div class="ui grid">

                    <div class="three wide column">
                        <?php include_once("include/sidebar_config.php"); ?>
                    </div>
                    <div class="thirteen wide column">

                        <div class="ui segment">
                            <h1>Store</h1>
                            <div class="ui divider"></div>
                            <table class="ui compact celled table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ProductName</th>
                                        <th>Picture</th>
                                        <th>Type</th>
                                        <th>$/Unit</th>
                                        <th>Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result = query("SELECT * FROM product ORDER BY ProdID DESC");
                                    confirm($result);
                                    
                                    while($row = fetch_array($result)){
                                    $product = <<<EOD
                                    <tr>
                                        <td>{$row['ProdID']}</td>
                                        <td>{$row['ProdName']}</td>
                                        <td><img class="ui tiny image" src="{$row['ProdPicture']}"></td>
                                        <td>{$row['ProdType']}</td>
                                        <td class="right aligned">{$row['ProdPricePerUnit']}.00</td>
                                        <td class="right aligned">{$row['ProdAmount']}</td>
                                        <td class="center aligned">
                                            <button class="ui icon button Preview-Product" value="{$row['ProdID']}"><i class="newspaper icon"></i></button>
                                            <button class="ui icon button Edit-Product" value="{$row['ProdID']}"><i class="edit icon"></i></button>
                                            <button class="ui icon button Delete-Product" value="{$row['ProdID']}"><i class="trash outline icon"></i></button>
                                        </td>
                                    </tr>
EOD;
                                    echo $product;
                                    }
                                    ?>
                                </tbody>
                                <tfoot class="full-width">
                                    <tr>
                                        <th></th>
                                        <th colspan="8">
                                            <div class="ui right floated small primary labeled icon button">
                                                <i class="plus icon"></i> Add Product
                                            </div>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</html>