<nav class="ui brown top fixed inverted menu">
    <div class="ui container">
        <a class="item nav-menu" href='index.php'><b><i class="food icon"></i>RESTAURANT</b></a>
        <a class="item nav-menu" href='menu.php'>MENU</a>
        <a class="item nav-menu" href='chief.php'>CHEF PROFILE</a>
        <a class="item nav-menu" href='about.php'>ABOUT US</a>
        <div class="right menu">
            <a class="item" href="store.php">STORE</a>
            <div class="ui floating dropdown">
                <a class="item"><i class="user large icon"></i><i class="dropdown icon"></i></a>
                <div class="menu">
                    <?php
                    if(!logged_in()){
                        echo '
                            <div class="item" id="login"><i class="privacy icon"></i>Login</div>
                            <div class="item" id="register"><i class="add user icon"></i>Register</div>';
                    }
                    else{
                        echo "
                            <div class='item disabled'><h4><i class='announcement icon'></i>Hello, {$_SESSION['username']}</h4></div>
                            <div class='divider'></div>
                            <div class='item'><i class='info icon'></i>My Information</div>
                            <div class='item'><i class='repeat icon'></i>History</div>";
                        if($_SESSION['userrole'] == 'Employee' || $_SESSION['userrole'] == 'Admin'){
                            echo "
                            <div class='item'><i class='tasks icon'></i>Orderlist</div>
                            <div class='item'><i class='shop icon'></i>Edit Store</div>";
                            if($_SESSION['userrole'] == 'Admin'){
                                echo "
                                <div class='item'><i class='users icon'></i>Edit User</div>";
                            }
                        }
                        echo "
                            <div class='divider'></div>
                            <a href='include/logout.php' class='item'><i class='power icon'></i>Logout</a>";
                    }
                    ?>
                </div>
            </div>
            <?php include("include/form_login.php") ?>
                <?php include("include/form_register.php") ?>
        </div>
    </div>
</nav>