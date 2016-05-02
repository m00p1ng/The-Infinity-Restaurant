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
            include("include/dialog_delete.php");
            include("include/form/add_customer.php");
            include("include/form/edit_customer.php");
        ?>
            <div id="wrap">
                <div id="main">
                    <div class="ui container pad-segment">
                        <div class="ui grid" style="overflow-y:auto;white-space:nowrap;">
                            <div class="three wide column">
                                <?php include_once("include/sidebar_config.php"); ?>
                            </div>
                            <div class="thirteen wide column">
                                <div class="ui segment" style="overflow-y:auto;white-space:nowrap;">
                                    <h1><i class='user icon'></i>Customer</h1>
                                    <div class="ui divider"></div>

                                    <div class="ui mall primary labeled icon button" id="add-new-customer-button">
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
                                                <th>Street</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip</th>
                                                <th>Email</th>
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
                                        <td>{$row['CustStreet']}</td>
                                        <td>{$row['CustCity']}</td>
                                        <td>{$row['CustState']}</td>
                                        <td>{$row['CustZip']}</td>
                                        <td>{$user['UserEmail']}</td>
                                        <td>{$row['CustPhone']}</td>
                                        <td class='center aligned'>
                                            <button class='ui icon button Edit_customer' value='{$row['CustID']}'><i class='write icon'></i></button>
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
                                                <th colspan="13">
                                                    <h2>Total: <?php echo $count_cust ?> customer</h2>
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
            <script src="js/customer.js"></script>
            <?php include_once('include/footer.php'); ?>
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