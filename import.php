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
            include("include/form/add_import.php");
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
                                    <h1><i class="download icon"></i>Import</h1>
                                    <div class="ui divider"></div>

                                    <div class="ui mall primary labeled icon button" id="add-new-import-button">
                                        <i class="arrow down icon"></i> Import
                                    </div>
                                    <br />
                                    <br />
                                    <?php
                                    
                                    $result1 = query("SELECT * FROM importlist ORDER BY ImpID DESC");
                                    
                                    while($row = fetch_array($result1)){
                                        $date = date("d-m-Y", strtotime($row['ImpDate']));
                                        $time = substr($row['ImpTime'],0,  5);
                                        echo "
                                        <div class='ui accordion'>
                                            <div class='title'>
                                                <div class='ui top attached success message'>
                                                    <h3><i class='dropdown icon'></i>Import #{$row['ImpID']}</h3>
                                                </div>
                                            </div>
                                            <div class='content'>
                                                <div class='ui segment'>
                                                    <div>
                                                        <b>Date: </b> {$date}
                                                        <p><b>Time: </b> {$time}</p>
                                                        <b>Receiver By: </b> {$row['ImpReceiverID']}
                                                        <br />
                                                        <b>Import Cost: </b> ฿{$row['ImpImportCost']}
                                                        <br />
                                                        <b>Total Cost: </b> ฿{$row['ImpTotalCost']}
                                                    </div>
                                                    <table class='ui celled table'>
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Amount</th>
                                                                <th>Manufacture</th>
                                                                <th>Cost</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>";
                                        
                                        $query2 = "SELECT ProdName, ManuName, ProdImAmount,	ProdImCost ";
                                        $query2 .= "FROM product, manufacturer, productimport ";
                                        $query2 .= "WHERE ProdID=ProdImProdID AND ManuID=ProdImManuID AND ProdImImpID={$row['ImpID']}";
                                        $result2 = query($query2);
                                        
                                        while($row1 = fetch_array($result2)){
                                            echo"
                                                <tr>
                                                    <td>{$row1['ProdName']}</td>
                                                    <td class='right aligned'>{$row1['ProdImAmount']}</td>
                                                    <td>{$row1['ManuName']}</td>
                                                    <td class='right aligned'>{$row1['ProdImCost']}</td>
                                                </tr>";   
                                        }
                                        echo "      
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("include/footer.php") ?>
                <script src="js/import.js"></script>

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