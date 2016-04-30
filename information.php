<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <body>
        <?php
        include("include/menubar.php");
        include("include/form/change_password.php");
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
                                    <h1><i class='info icon'></i>My Information</h1>
                                    <div class="ui divider"></div>
                                    <div class="ui form">
                                        <?php
                                $search_userid = query("SELECT * FROM user WHERE Username='{$_SESSION['username']}'");
                                confirm($search_userid);
                                $result_search = fetch_array($search_userid);
                                
                                $q = "";
                                
                                if($_SESSION['userrole'] == 'Employee'){
                                    $q = "SELECT * FROM employee WHERE EmpUser={$result_search['UserID']}";
                                }
                                else {
                                    $q = "SELECT * FROM customer WHERE CustUser={$result_search['UserID']}";
                                }
                                
                                $result = query($q);
                                confirm($result);
                                
                                $row = fetch_array($result);
                                
                                if($_SESSION['userrole'] == 'Employee'){
                                    $firstname = $row['EmpFirstName'];
                                    $lastname = $row['EmpLastName'];
                                    $gender = $row['EmpGender'];
                                    $address = $row['EmpAddress'];
                                    $dob = $row['EmpDOB'];
                                    $phone = $row['EmpPhone'];
                                }
                               else{ 
                                    $firstname = $row['CustFirstName'];
                                    $lastname = $row['CustLastName'];
                                    $gender = $row['CustGender'];
                                    $address = $row['CustAddress'];
                                    $dob = $row['CustDOB'];
                                    $phone = $row['CustPhone'];
                               }
                                
                                echo "   
                                    <div class='five wide field'>
                                        <div class='field'>
                                            <label>Username</label>
                                            <input type='text' value='{$_SESSION['username']}' disabled>
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <a class='change_password' href='#'>Change Password</a>
                                    </div>
                                    <div class='twelve wide field'>
                                        <div class='two fields'>
                                            <div class='field'>
                                                <label>Firstname</label>
                                                <input type='text' value='{$firstname}'>
                                            </div>
                                            <div class='field'>
                                                <label>Lastname</label>
                                                <input type='text' value='{$lastname}'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='three wide field'>
                                        <div class='field'>
                                            <label>Gender</label>
                                            <input type='text' value='{$gender}'>
                                        </div>
                                    </div>
                                    <div class='three wide field'>
                                        <div class='field'>
                                            <label>Date of Birth</label>
                                            <input type='text' value='{$dob}'>
                                        </div>
                                    </div>
                                    <div class='twelve wide field'>
                                        <div class='field'>
                                            <label>Address</label>
                                            <input type='text' value='{$address}'>
                                        </div>
                                    </div>
                                    <div class='six wide field'>
                                        <div class='field'>
                                            <label>Email</label>
                                            <input type='text' value='{$result_search['UserEmail']}'>
                                        </div>
                                    </div>
                                    <div class='four wide field'>
                                        <div class='field'>
                                            <label>Phone</label>
                                            <input type='text' value='{$phone}'>
                                        </div>
                                    </div>";
                                if($_SESSION['userrole'] == 'Employee'){
                                    echo "
                                    <div class='four wide field'>
                                        <div class='field'>
                                            <label>Position</label>
                                            <input type='text' value='{$row['EmpPosition']}' disabled>
                                        </div>
                                    </div>
                                    <div class='four wide field'>
                                        <div class='field'>
                                            <label>Status</label>
                                            <input type='text' value='{$row['EmpStatus']}' disabled>
                                        </div>
                                    </div>
                                    <div class='twelve wide field'>
                                        <div class='field'>
                                            <label>Note</label>
                                            <textarea disabled>{$row['EmpNote']}</textarea>
                                        </div>
                                    </div>";
                                }
                                else{
                                    echo "
                                    <div class='two wide field'>
                                        <div class='field'>
                                            <label>Card Type</label>
                                            <input type='text' value='{$row['CustCreditType']}'>
                                        </div>
                                    </div>
                                    <div class='five wide field'>
                                        <div class='field'>
                                            <label>Card Number</label>
                                            <input type='text' value='{$row['CustCreditID']}'>
                                        </div>
                                    </div>
                                    <div class='three wide field'>
                                        <div class='field'>
                                            <label>Expiration</label>
                                            <input type='text' value='{$row['CustCreditExp']}'>
                                        </div>
                                    </div>";
                                    }
                                ?>
                                            <div class="field">
                                                <input type="submit" class="ui green button">
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('include/footer.php'); ?>
    </body>

</html>