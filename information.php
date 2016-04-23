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
                            <h1>My Information</h1>
                            <div class="ui divider"></div>
                            <div class="ui form">
                                <div class="field">
                                    <label>Username</label>
                                    <input type="text" value="test" disabled>
                                </div>
                                <div class="field">
                                    <a href="#">Change Password</a>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label>Firstname</label>
                                        <input type="text">
                                    </div>
                                    <div class="field">
                                        <label>Lastname</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Gender</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Date of Birth</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Address</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Email</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Phone</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Card Type</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Card Number</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <label>Expiration</label>
                                    <input type="text">
                                </div>
                                <div class="field">
                                    <input type="submit" class="ui button">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</html>