<nav class="ui brown top fixed inverted menu">
    <div class="ui container">
        <a class="item nav-menu" href='index.php'><b><i class="food icon"></i>RESTAURANT</b></a>
        <a class="item nav-menu" href='menu.php'>MENU</a>
        <a class="item nav-menu" href='chief.php'>CHEF PROFILE</a>
        <a class="item nav-menu" href='about.php'>ABOUT US</a>
        <div class="right menu">
            <a class="item" href="store.php">STORE</a>
            <div class="ui floating dropdown">
                <a class="item"><?php (!logged_in()) ? $user_label =  "<i class='user icon'></i>Guest" : $user_label = "<i class='user icon'></i>".$_SESSION['username']; echo $user_label ?><i class='dropdown icon'></i></a>
                <div class="menu">
                    <?php
                    if(!logged_in()){
                        echo '
                    <div class="item" id="register"><i class="add user icon"></i>Register</div>
                    <div class="item" id="login"><i class="privacy icon"></i>Login</div>';
                    }
                    else{
                        if($_SESSION['userrole'] != 'Admin') {
                            echo "
                    <div class='header'>Info</div>
                    <a class='item' href='information.php'><i class='info icon'></i>My Information</a>
                    <a class='item' href='history.php'><i class='history icon'></i>History</a>";
                        }
                        if($_SESSION['userrole'] == 'Employee'){
                            echo "<div class='divider'></div>";
                        }
                        if($_SESSION['userrole'] == 'Employee' || $_SESSION['userrole'] == 'Admin'){
                            echo "
                    <div class='header'>Manage</div>
                    <a class='item' href='orderlist.php'><i class='tasks icon'></i>Order List</a>
                    <a class='item' href='editstore.php'><i class='shop icon'></i>Store</a>
                    <a class='item' href='customer.php'><i class='user icon'></i>Customer</a>";
                            if($_SESSION['userrole'] == 'Admin'){
                                echo"
                    <a class='item' href='employee.php'><i class='user icon'></i>Employee</a>
                    <a class='item' href='users.php'><i class='users icon'></i>Users</a>";
                            }
                        }
                        echo "
                    <div class='divider'></div>
                    <a href='include/logout.php' class='item'><i class='power icon'></i>Logout</a>";
                    }
                    ?>
                </div>
            </div>
            <?php
            if(!isset($_SESSION['username'])){
                include("include/form/login.php");
                include("include/form/register.php"); 
            }
            ?>
        </div>
    </div>
</nav>