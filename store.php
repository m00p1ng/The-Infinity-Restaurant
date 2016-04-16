<!DOCTYPE html>
<html lang="en">

<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>


    <body>

        <?php include("include/menubar.php") ?>

            <div class="ui container">
                <div class="ui top bilboard test ad" data-text="">
                    <div class="ui fluid image">
                        <img src="http://placehold.it/800x150" alt="">
                    </div>
                </div>
            </div>

            <div class="ui small modal item-def-modal">
                <div class="header">Cute Dog</div>
                <div class="content">
                    <img class="ui centered rounded image" src="http://placehold.it/400x300">
                    <h4 class="ui horizontal divider header">
                <i class="tag icon"></i>
                Description
            </h4>
                    <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size. sdafasdfsad adsfasdf</p>
                    <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size. sdafasdfsad adsfasdf</p>
                    <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size. sdafasdfsad adsfasdf</p>
                    <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size. sdafasdfsad adsfasdf</p>
                    <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size. sdafasdfsad adsfasdf</p>
                </div>
            </div>

            <div class="ui small modal item-buy-modal">
                <div class="header">Cute Dog</div>
                <div class="content">
                    <div class="ui grid">
                        <div class="five wide column">
                            <img class="ui small rounded image" src="http://placehold.it/400x400">
                        </div>
                        <div class="seven wide column">
                            ต้องการจะซื้อกี่ชิ้นจ๊ะ
                        </div>
                        <div class="four wide column">
                            <form class="ui right floating form">
                                <div class="inline fields">
                                    <label>Amount :</label>
                                    <div class="seven wide field">
                                        <input type="text" maxlength="3">
                                    </div>
                                </div>
                                <button class="ui right floated blue button"><i class="add to cart icon"></i>Add to Cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <div class="ui container" id="shop">
                <div class="ui grid">
                    <div class="ui twelve wide column">
                        <div class="ui segment">
                            <div class="ui brown secondary menu">
                                <a class="item active">All</a>
                                <a class="item">Raw Material</a>
                                <a class="item">Fruit</a>
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