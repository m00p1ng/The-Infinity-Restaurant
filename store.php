<!DOCTYPE html>
<html lang="en">

<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <script>
    </script>

    <body>
        <?php
        include("include/menubar.php");
        include("include/product_buy.php");
        include("include/product_description.php");
        include("include/product_store.php");
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
                                <?php get_product('raw_material') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-fruit">
                                <?php get_product('fruit') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-vegetable">
                                <?php get_product('vegetable') ?>
                            </div>
                            <div class="ui special three cards show-prod" id="page-drinking">
                                <?php get_product('drinking') ?>
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
                                <div class="ui message">
                                    <i class="close icon"></i>
                                    <div class="header">
                                        Mooping(x3)
                                    </div>
                                    <p>Total: $30</p>
                                </div>
                                <div class="ui message">
                                    <i class="close icon"></i>
                                    <div class="header">
                                        Welcome back!
                                    </div>
                                    <p>This is a special</p>
                                </div>
                                <div class="ui message">
                                    <i class="close icon"></i>
                                    <div class="header">
                                        Welcome back!
                                    </div>
                                    <p>This is a special</p>
                                </div>
                                <div class="ui message">
                                    <i class="close icon"></i>
                                    <div class="header">
                                        Welcome back!
                                    </div>
                                    <p>This is a special</p>
                                </div>
                                <div class="ui message">
                                    <i class="close icon"></i>
                                    <div class="header">
                                        Welcome back!
                                    </div>
                                    <p>This is a special</p>
                                </div>
                                <br />
                                <div class="ui right aligned">
                                    <h2>Total: $150</h2>
                                </div>

                                <br />
                                <a href="#" class="fluid ui red inverted button">Check Out!!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("include/footer.php") ?>
    </body>

</html>