<!DOCTYPE html>
<html lang="en">

<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <body>
        <?php
        include("include/menubar.php");
        include("include/form/product_buy.php");
        include("include/form/product_description.php");
        include("include/prod_show.php");
        
        if(!isset($_SESSION['product_total'])){
            $_SESSION['product_total'] = 0;
        }
        if(!isset($_SESSION['product_count'])){
            $_SESSION['product_count'] = 0;
        }
        ?>
            <div class="ui container">
                <div class="ui top bilboard test ad" data-text="">
                    <div class="ui fluid image">
                        <img src="http://placehold.it/800x150" alt="">
                    </div>
                </div>
            </div>
            <div class="ui container" id="shop">
                <div class="ui grid">
                    <div class="ui twelve wide column">
                        <div class="ui segment">
                            <div class="ui brown secondary menu">
                                <button class="type item active" id="show-all">All</button>
                                <button class="type item" id="show-raw_material">Raw Material</button>
                                <button class="type item" id="show-fruit">Fruit</button>
                                <button class="type item" id="show-vegetable">Vegetable</button>
                                <button class="type item" id="show-drinking">Drinking</button>
                                <div class="right menu">
                                    <div class="item">
                                        <div class="ui icon input">
                                            <input type="text" placeholder="Search..." name="search-prod" id="search-prod">
                                            <i class="search link icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui special three cards show-prod" id="page-all">
                                <?php get_product('') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-raw_material">
                                <?php get_product('Raw material') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-fruit">
                                <?php get_product('Fruit') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-vegetable">
                                <?php get_product('Vegetable') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-drinking">
                                <?php get_product('Drinking') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-search"></div>
                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui segments">
                            <div class="ui center aligned green inverted segment">
                                <h3><i class="big cart icon"></i>IN CART</h3>
                            </div>
                            <div class="ui segment">
                                <div id="show-prod-cart"></div>
                                <h2>Total: $<span class="Prod-total">0</span></h2>
                                <br />
                                <?php 
                                if(isset($_SESSION['username'])){
                                    echo "<a href='#' class='fluid ui red inverted button'>Check Out!!</a>";
                                }
                                else {
                                    echo "
                                    <p>Please <a herf='#' id='checkout_login'>login</a></p>
                                    <a href='#' class='fluid ui red inverted disabled button'>Check Out!!</a>
                                    ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("include/footer.php") ?>
                <script src="js/store.js"></script>
    </body>

</html>