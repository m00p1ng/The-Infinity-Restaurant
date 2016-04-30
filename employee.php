<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <body>
        <?php
        if(isset($_SESSION['userrole'])){
            if($_SESSION['userrole'] == 'Admin'){ 
                
            include("include/menubar.php");
            include("include/dialog_delete.php");
            include("include/form/add_employee.php");
            include("include/form/edit_employee.php");
                ?>
            <div id="wrap">
                <div id="main">
                    <div class="ui container pad-segment">
                        <div class="ui grid">
                            <div class="three wide column">
                                <?php include_once("include/sidebar_config.php"); ?>
                            </div>
                            <div class="thirteen wide column">
                                <div class="ui segment" style="overflow-y:auto;white-space:nowrap;">
                                    <h1><i class='user icon'></i>Employee</h1>
                                    <div class="ui divider"></div>

                                    <div class="ui mall primary labeled icon button" id="add-new-employee-button">
                                        <i class="add user icon"></i> Add&nbsp;Employee
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
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Note</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $result = query("SELECT * FROM employee ORDER BY EmpID DESC");
                                    confirm($result);
                                    
                                    while($row = fetch_array($result)){
                                    $user = query("SELECT * FROM user WHERE UserID={$row['EmpUser']}");
                                    $user = fetch_array($user);
                                    $product ="
                                    <tr>
                                        <td>{$row['EmpID']}</td>
                                        <td>{$row['EmpFirstName']}</td>
                                        <td>{$row['EmpLastName']}</td>
                                        <td>{$row['EmpGender']}</td>
                                        <td>{$row['EmpDOB']}</td>
                                        <td>{$user['Username']}</td>
                                        <td>{$row['EmpAddress']}</td>
                                        <td>{$user['UserEmail']}</td>
                                        <td>{$row['EmpPhone']}</td>
                                        <td>{$row['EmpPosition']}</td>
                                        <td>{$row['EmpStatus']}</td>
                                        <td>{$row['EmpNote']}</td>
                                        <td class='center aligned'>
                                            <button class='ui icon button Edit_employee' value='{$row['EmpID']}'><i class=write icon'></i></button>
                                            <button class='ui icon red button Delete_employee' value='{$row['EmpID']}&{$row['EmpUser']}'><i class='remove user icon'></i>
                                        </td>
                                    </tr>";              
                                    echo $product;
                                    }
                                    $count_emp = row_count($result);
                                    ?>
                                        </tbody>
                                        <tfoot class="full-width">
                                            <tr>
                                                <th colspan="13">
                                                    <h2>Total: <?php echo $count_emp ?> employee</h2>
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
            <script src="js/employee.js"></script>
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