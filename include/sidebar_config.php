<div class="ui segment">
    <div class="ui fluid secondary vertical menu">
        <?php
        if($_SESSION['userrole'] != 'Admin'){
            echo "
        <div class='header item'>INFO</div>
            <a class='item' href='information.php'><i class='info icon'></i>My Information</a>
            <a class='item' href='history.php'><i class='history icon'></i>History</a>";
        }
        ?>
            <?php 
        if($_SESSION['userrole'] == 'Employee' || $_SESSION['userrole'] == 'Admin'){
            echo "
            <div class='header item'>MANAGE</div>
            <a class='item' href='orderlist.php'><i class='tasks icon'></i>Order List</a>
            <a class='item' href='editstore.php'><i class='shop icon'></i>Store</a>
            <a class='item' href='import.php'><i class='download icon'></i>Import Product</a>
            <a class='item' href='customer.php'><i class='user icon'></i>Customer</a>";
            if($_SESSION['userrole'] == 'Admin'){
                echo "
            <a class='item' href='employee.php'><i class='user icon'></i>Employee</a>
            <a class='item' href='users.php'><i class='users icon'></i>Users</a>";
            }
        }
        ?>
    </div>
</div>