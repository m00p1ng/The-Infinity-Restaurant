<!DOCTYPE html>
<html lang="en">
<?php 
require_once("include/header.php");
require_once("include/inc.php");
?>

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }
        /* Header */
        
        .header-eiei {
            display: table;
            position: relative;
            width: 100%;
            height: 100%;
            background: url(src/index.jpg) no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>

    <body style="padding-top: 20px;">
        <?php
        include("include/menubar.php");
        ?>
            <div class="header-eiei"></div>
    </body>

</html>