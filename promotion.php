<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <body>
        <?php
        if(isset($_SESSION['userrole'])){
            if($_SESSION['userrole'] == 'Admin' || $_SESSION['userrole'] == 'Employee'){ 
            include("include/menubar.php");
            include("include/form/add_promotion.php");
        ?>

            <div id="wrap">
                <div id="main">
                    <div class="ui container">
                        <div class="ui grid">
                            <div class="three wide column">
                                <?php include_once("include/sidebar_config.php"); ?>
                            </div>
                            <div class="thirteen wide column">
                                <div class="ui segment">
                                    <h1><i class='tag icon'></i>Promotion</h1>
                                    <div class="ui divider"></div>
                                    <div class="ui mall primary labeled icon button" id="add-new-promo-button">
                                        <i class="plus icon"></i> Add&nbsp;Promotion
                                    </div>
                                    <table class="ui compact celled table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>CutPrice(%)</th>
                                                <th>Time Interval</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $result = query("SELECT * FROM promotion ORDER BY PromoID DESC");
                                    confirm($result);
                                    
                                    
                                    while($row = fetch_array($result)){
                                    $promo ="
                                    <tr>
                                        <td>{$row['PromoID']}</td>
                                        <td>{$row['PromoName']}</td>
                                        <td>{$row['PromoCutPrice']}</td>
                                        <td>{$row['PromoInterval']}</td>
                                        <td class='center aligned'>
                                            <button class='ui icon button' value=''><i class='write icon'></i></button>
                                            <button class='ui icon red button' value=''><i class='trash outline icon'></i>
                                        </td>
                                    </tr>";              
                                    echo $promo;
                                    }
                                    
                                    $count_promo = row_count($result);
                                    ?>
                                        </tbody>
                                        <tfoot class="full-width">
                                            <tr>
                                                <th colspan="10">
                                                    <h2>Total: <?php echo $count_promo ?> promotion</h2>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="js/promotion.js"></script>
            <?php include("include/footer.php") ?>
                <?php 
                }
            }
            else{
                echo "<h1>Permission Denied</h1>";
                die();
            }
            ?>
    </body>

</html>