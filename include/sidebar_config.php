<div class="ui segment">
    <div class="ui fluid secondary vertical menu">
        <div class="header item">INFO</div>
        <a class="item"><i class='info icon'></i>My Information</a>
        <a class="item"><i class='repeat icon'></i>History</a>
        <?php 
        if($_SESSION['userrole'] == 'Employee' || $_SESSION['userrole'] == 'Admin'){
            echo "
            <div class='header item'>MANAGE</div>
            <a class='item' href='orderlist.php'><i class='tasks icon'></i>Orderlist</a>
            <a class='item' href='editstore.php'><i class='shop icon'></i>Edit Store</a>";
            if($_SESSION['userrole'] == 'Admin'){
                echo "
                <a class='item' href='users.php'><i class='users icon'></i>Users</a>";
            }
        }
        ?>
    </div>
</div>