<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <style>
        td {
            width: 146px;
        }
    </style>

    <body>
        <?php
        include("include/menubar.php");
        ?>
            <div class="ui container">
                <div class="ui grid" style="overflow-y:auto;white-space:nowrap;">
                    <div class="three wide column">
                        <?php include_once("include/sidebar_config.php"); ?>
                    </div>
                    <div class="thirteen wide column">
                        <div class="ui segment" style="overflow-y:auto;white-space:nowrap;">
                            <h1>Customer</h1>
                            <div class="ui divider"></div>
                            <table class="ui compact celled table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Gender</th>
                                        <th>Date of Birth</th>
                                        <th>Username</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result = query("SELECT * FROM customer ORDER BY CustID DESC");
                                    confirm($result);
                                    
                                    while($row = fetch_array($result)){
                                    $product ="
                                    <tr>
                                        <td>{$row['CustID']}</td>
                                        <td>{$row['CustFirstName']}</td>
                                        <td>{$row['CustLastName']}</td>
                                        <td>{$row['CustGender']}</td>
                                        <td>{$row['CustDOB']}</td>
                                        <td>Username</td>
                                        <td>{$row['CustAddress']}</td>
                                        <td>{$row['CustPhone']}</td>
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