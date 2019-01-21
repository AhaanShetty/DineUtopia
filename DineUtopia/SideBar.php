<?php
include("login.php");
?>
        <div class="sidebar-header">
            <a href="index.php"><img src="/image/logo_dark.png" width="170" height="120"></a>
           <!--<a href="index.php"><h1>DINE</h1>
                    <h3>UTOPIA</h3></a>-->
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="abt.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
            </li>
            <li>
                <a href="Menu.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Menu</a>
            </li>
            <li>
                <a href="cont.php"><i class="fa fa-envelope-open" aria-hidden="true"></i> Contact</a>
            </li>
            <?php
            if(isset($_SESSION['login_user'])){
                if(isset($_SESSION['type'])){
                echo '<li>
                <a href="#" data-target="#resModal" data-toggle="modal"><i class="fa fa-book" aria-hidden="true"></i> Reservations</a>
            </li>';
                }}
                else {
                    echo '<li>
                <a href="#" onclick="myfunction()"><i class="fa fa-book" aria-hidden="true"></i> Reservations</a>
            </li>';
                }
            ?>
            <?php
            if(isset($_SESSION['login_user'])){
                if(isset($_SESSION['type'])){
                echo '
                <li>
                    <a href="order.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Order Now</a></li>';
                if(isset($_SESSION['Total'])){
                    echo '
                
                <li>
                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>';}
                    echo '
                
                <li>
                    <a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i> Logout</a></li>';
                }
                else{
                echo '<li>
                    <a href="ManageItem.php"><i class="fa fa-user" aria-hidden="true"></i> Manage Items</a></li>
                    <li><a href="ManageReserve.php"><i class="fa fa-user" aria-hidden="true"></i> Manage Reservations</a></li>
                
                <li>
                    <a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i> Logout</a></li>';
            }  
            }
            else
                echo '<li>
                    <a href="#" data-target="#loginModal" data-toggle="modal"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                    <li>
                    <a href="#" data-target="#signupModal" data-toggle="modal"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                    
                    <script>
    function myfunction(){
        alert("Login to Reserve a Table");
    }
</script>
                    
                    ';
            ?>
        </ul>

<script>
    function myfunction(){
        alert('Login to Reserve a Table');
    }
</script>