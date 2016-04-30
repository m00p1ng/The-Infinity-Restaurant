<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <body>
        <div id="wrap">
            <div id="main">
                <?php
        include("include/menubar.php");
        include("include/dialog_delete.php");
        ?>
                    <div class="ui container">
                        <div class="ui grid">
                            <div class="three wide column">
                                <?php include_once("include/sidebar_config.php"); ?>
                            </div>
                            <div class="thirteen wide column">
                                <div class="ui segment">
                                    <h1><i class='users icon'></i>User</h1>
                                    <div class="ui divider"></div>
                                    <table class="ui compact celled table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Type</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $result = query("SELECT * FROM user ORDER BY UserID DESC");
                                    confirm($result);
                                    
                                    while($row = fetch_array($result)){
                                    $product ="
                                    <tr>
                                        <td>{$row['UserID']}</td>
                                        <td>{$row['Username']}</td>
                                        <td>{$row['UserRole']}</td>
                                        <td>{$row['UserEmail']}</td>
                                    </tr>";
                                        
                                    echo $product;
                                    }
                                    $count_user = row_count($result);
                                    ?>
                                        </tbody>
                                        <tfoot class="full-width">
                                            <tr>
                                                <th colspan="12">
                                                    <h2>Total: <?php echo $count_user ?> User</h2>
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
        <?php include("include/footer.php") ?>
    </body>

</html>