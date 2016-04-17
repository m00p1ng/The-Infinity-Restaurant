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
                                <a class="type item active">All</a>
                                <a class="type item">Raw Material</a>
                                <a class="type item">Fruit</a>
                                <a class="type item">Vegetable</a>
                                <a class="type item">Drinking</a>
                                <div class="right menu">
                                    <div class="item">
                                        <div class="ui icon input">
                                            <input type="text" placeholder="Search...">
                                            <i class="search link icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ui special three cards">
                                <?php get_product() ?>
                            </div>

                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui segments">
                            <div class="ui center aligned green inverted segment">
                                <h3><i class="add to cart icon"></i>CART</h3>
                            </div>
                            <div class="ui segment">
                                <p><span>3 items</span></p>
                                <a href="#" class="fluid ui red inverted button">Check Out!!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("include/footer.php") ?>
    </body>

</html>