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
        include("include/dialog_delete.php");
        ?>
            <div class="ui container">
                <div class="ui grid" style="overflow-y:auto;white-space:nowrap;">
                    <div class="three wide column">
                        <?php include_once("include/sidebar_config.php"); ?>
                    </div>
                    <div class="thirteen wide column">
                        <div class="ui segment" style="overflow-y:auto;white-space:nowrap;">
                            <h1><i class='user icon'></i>Customer</h1>
                            <div class="ui divider"></div>

                            <div class="ui mall primary labeled icon button add-new-product-button">
                                <i class="add user icon"></i> Add&nbsp;Customer
                            </div>

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
                                    $user = query("SELECT * FROM user WHERE UserID={$row['CustUser']}");
                                    $user = fetch_array($user);
                                    $customer ="
                                    <tr>
                                        <td>{$row['CustID']}</td>
                                        <td>{$row['CustFirstName']}</td>
                                        <td>{$row['CustLastName']}</td>
                                        <td>{$row['CustGender']}</td>
                                        <td>{$row['CustDOB']}</td>
                                        <td>{$user['Username']}</td>
                                        <td>{$row['CustAddress']}</td>
                                        <td>{$row['CustPhone']}</td>
                                        <td class='center aligned'>
                                            <button class='ui icon button Edit_customer' value='{$row['CustID']}''><i class='edit icon'></i></button>
                                            <button class='ui icon red button Delete_customer' value='{$row['CustID']}&{$row['CustUser']}'><i class='remove user icon'></i>
                                        </td>
                                    </tr>";              
                                    echo $customer;
                                    }
                                    
                                    $count_cust = row_count($result);
                                    ?>
                                </tbody>
                                <tfoot class="full-width">
                                    <tr>
                                        <th colspan="9">
                                            <h2>Total: <?php echo $count_cust ?> Customer</h2>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('include/footer.php'); ?>
    </body>

</html>