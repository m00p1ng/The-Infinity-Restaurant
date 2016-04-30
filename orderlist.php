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
                                    <h1><i class='tasks icon'></i>Order List</h1>
                                    <div class="ui divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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