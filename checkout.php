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
                        <div class="ui segment">
                            <h1><i class='in cart icon'></i>Checkout</h1>
                            <div class="ui divider"></div>
                            <h1>Summary</h1>

                            <div class="ui message">
                                <div class="header">
                                    Banana ( 3 )
                                </div>
                                Total: ฿ 60
                            </div>

                            <div class="ui message">
                                <div class="header">
                                    Chocolate ( 5 )
                                </div>
                                Total: ฿ 1000
                            </div>

                            <div class="ui message">
                                <div class="header">
                                    Strawberry milk ( 1 )
                                </div>
                                Total: ฿ 50
                            </div>

                            <div class="ui message">
                                <div class="header">
                                    Pork Meat ( 3 )
                                </div>
                                Total: ฿ 450
                            </div>

                            <div class="ui message">
                                <div class="header">
                                    Salad ( 3 )
                                </div>
                                Total: ฿ 450
                            </div>

                            <div class="ui form">
                                <div class="six wide field">
                                    <div class="field">
                                        <label>Promotion</label>
                                        <div class="field">
                                            <select class="ui fluid search dropdown" name="exp-month" id="exp-month" value="" required>
                                                <option value="">Select</option>
                                                <option value="01">Discount 50฿</option>
                                                <option value="02">Discount 15%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h1>Total : ฿ 2010</h1>
                            <button class="ui red button">Cancel</button>
                            <button class="ui green button">Confirm</button>
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