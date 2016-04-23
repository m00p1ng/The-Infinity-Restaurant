<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <body>
        <?php
        include("include/menubar.php");
        ?>
            <div class="ui container">
                <div class="ui grid">
                    <div class="three wide column">
                        <?php include_once("include/sidebar_config.php"); ?>
                    </div>
                    <div class="thirteen wide column">
                        <div class="ui segment">
                            <h1>User</h1>
                            <div class="ui divider"></div>
                            <table class="ui compact celled table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Type</th>
                                        <th>Email</th>
                                        <th></th>
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
                                        <td class='center aligned'><button class='ui icon red button' value=''><i class='remove user icon'></i></td>
                                    </tr>";
                                        
                                    echo $product;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</html>