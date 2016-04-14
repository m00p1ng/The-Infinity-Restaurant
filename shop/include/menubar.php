<nav class="ui brown top fixed inverted menu">
    <div class="ui container">
        <a class="item" href="./index.php"><b>RESTAURANT</b></a>
        <a class="item" href="./menu.php">MENU</a>
        <a class="item" href="./chief.php">CHIEF PROFILE</a>
        <a class="item" href="./about.php">ABOUT US</a>
        <div class="right menu">
            <a class="item active" href="./store.php">STORE</a>
            <div class="ui floating dropdown">

                <a class="item"><i class="user icon"></i></a>
                <div class="menu">
                    <div class="item" id="sign-in">Sign-In</div>
                    <div class="item" id="register">Register</div>
                </div>
            </div>
            <?php include("include/login.php") ?>
                <?php include("include/signup.php") ?>
        </div>
    </div>
</nav>