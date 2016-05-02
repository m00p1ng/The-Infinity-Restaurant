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
            <div id="wrap">
                <div id="main">
                    <div class="ui container pad-segment">
                        <div class="ui segment">
                            <h1 class="ui center aligned header">ABOUT US</h1>
                            <div class="ui divider"></div>
                            <div class="ui special three cards">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="src/march.jpg">
                                    </div>
                                    <div class="content">
                                        <a class="header">Krittin Meenrattanakorn</a>
                                        <div class="meta">
                                            5710501522
                                        </div>
                                        <div class="description">
                                            Database designer
                                        </div>
                                    </div>
                                </div>
                                <div class="ui card">
                                    <div class="image">
                                        <img src="src/moo.jpg">
                                    </div>
                                    <div class="content">
                                        <a class="header">Mongkonchai Priyachiwa</a>
                                        <div class="meta">
                                            5710501581
                                        </div>
                                        <div class="description">
                                            Web developer
                                        </div>
                                    </div>
                                </div>
                                <div class="ui card">
                                    <div class="image">
                                        <img src="src/tam2.jpg">
                                    </div>
                                    <div class="content">
                                        <a class="header">Santitham Ananwattanaporn</a>
                                        <div class="meta">
                                            5710501590
                                        </div>
                                        <div class="description">
                                            Database manager &amp; System tester
                                        </div>
                                    </div>
                                </div>

                                <div class="ui card">
                                    <div class="image">
                                        <img src="src/chee.jpg">
                                    </div>
                                    <div class="content">
                                        <a class="header">Cheevarit Rodnuson</a>
                                        <div class="meta">
                                            5710503347
                                        </div>
                                        <div class="description">
                                            Database Designer &amp; Web layout
                                        </div>
                                    </div>
                                </div>
                                <div class="ui card">
                                    <div class="image">
                                        <img src="src/mix.jpg">
                                    </div>
                                    <div class="content">
                                        <a class="header">Methus Mungkijpaisan</a>
                                        <div class="meta">
                                            <span class="date">5710503517</span>
                                        </div>
                                        <div class="description">
                                            Database manager &amp; System tester
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
            <?php include("include/footer.php") ?>

                <script>
                    $(document).ready(function () {
                        $('.ui.card').mouseenter(function () {
                            $(this).transition('pulse');
                        });
                    });
                </script>
    </body>

</html>