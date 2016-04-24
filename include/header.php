<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/blog-home.css">
    <script src="js/jquery.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/all_page.js"></script>
    <?php 
    if(!isset($_SESSION['username'])){
        echo "
    <script src='js/register.js'></script>
    <script src='js/login.js'></script>";       
    }
    ?>
        <title>My Restaurant</title>
</head>