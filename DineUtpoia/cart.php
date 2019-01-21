<?php
session_start();
include("config.php");
$order_id = $_SESSION['Order_Id'];
$sql = "Select * from Item i INNER JOIN Contains c ON i.Item_Id=c.Item_Id where c.order_Id='$order_id'";
$result = mysqli_query($db,$sql);   
if(!isset($_SESSION['discount']))
{
 $_SESSION['discount']=0;
}
$email=$_SESSION['user_email'];
$sql1 = "Select * from Customer where Email_Id='$email' ";
$result1 = mysqli_query($db,$sql1);
$row=mysqli_fetch_array($result1,MYSQLI_BOTH);
if($row['offer_id'] != NULL)
{
    $_SESSION['flag']=1;
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DINE UTOPIA</title>

         <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
        <!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        
        <script src="scriptToggleSidebarMenu.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="styleCart.css">
        <script src="scriptCart.js" type="text/javascript"></script>
    </head>
    <body>
<div class="wrapper" id="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar"></nav>
    <div id="content" class="container-fluid">
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: transparent">
                <i class="fas fa-align-left fa-3x"></i>
            </button>
        <span style="font-family: 'Cinzel', serif;
            font-size: 1.5em;
            color:#bbd4cd;
            text-shadow:1px 2px 10px black;">
        <?php 
        if(isset($_SESSION['login_user'])){
        echo 'HELLO ';
        echo $_SESSION['login_user'];
        echo " !";
        }
        ?>
        </span>
        </div>
    </nav>
     <div class=" section banner container-fluid" style="background: url('https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=02aef228d5a26e0bb9e284b7a604f61b&auto=format&fit=crop&w=750&q=80') no-repeat center center; background-size: cover;">

    </div>
            <div class="container-fluid section menu-top">
                     <div class = "container-fluid">
                        <div class="shopping-cart">
                            <div class="cart-title">
                                          Cart
                            </div>
                            <div class="cart-head">
                                <div class="remove-head">Remove Item</div>
                                <div class="Item-description">Item Description</div>
                                <div class="sub-total_title">Sub-Total</div>
                            </div>
                                <?php
                                $i=0;
                                while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
                                {
                                    $item_name=$row['Name'];
                                    $item_price=$row['Price'];
                                    $item_quantity=$row['Quantity'];
                                    $type=$row['Type'];
                                    $sub_total=$row['sub_total'];
                                    $item_id=$row['item_id'];
                                    ?>
                                        <!-- Product #1 -->
                                     <div class="item">
                                     <div class="del-buttons">
                                         <form action="del_cart.php" method="post">
                                        <?php echo "<input type='hidden' name='hidden_id' value=$item_id />"; ?>
                                         <button class="delete-btn" type="submit" name="button" >
                                             <img src="/image/rubbish-bin (1).svg" alt="" />
                                         </button>
                                         </form>
                                      </div>

                                         <div class="description">
                                          <span><?php
                                              if($type=="Veg")
						                    	echo "<img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'>";
						                        	else
						                    	echo "<img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'>";
                                               echo " ".$item_name; ?></span>
                                           <span>&#8377; <?php echo $item_price;  ?></span>
                                            <span>Quantity : <?php echo $item_quantity; ?></span>
                                          </div>
                                         
                                           <div class="sub_total" id="sub_total"> &#8377;<?php  echo $sub_total; ?></div>
                                              </div>
                                              
                                             
                           <?php } ?>
                           <div class="total">
                            <div class="total_display">
                            <?php echo "Total amount : &#8377;".$_SESSION['Total']; ?>
                        </div>
                                                </div>
            <form method="post" action="offer.php" style="padding-left:10px">
            <div class="form-group">
                <label for="offer_id" >Offer Id</label>
                <input id="offer_id" type="text" class="form-control" placeholder="Enter Offer Id" aria-label="Card Holder" aria-describedby="basic-addon1" style="width:150px;" name="offer"  />
                <br>
                <div id="invalid_offer" style="display:none;color:red;">Invalid Offer</div>
                <button type="submit" class="btn btn-primary offer" id="offer_btn" <?php if(isset($_SESSION['flag'])){echo "disabled";} ?>>Apply Offer</button>
             </form>
                        <div class="payment">
                            <button <?php if($_SESSION['Total']==0){echo "disabled";} ?> type="button" onclick="window.location.href='http://easydine.000webhostapp.com/checkOut.php'" class="btn btn-primary">Proceed to Payment</button>
                        </div>

                        </div>
                        
                    </div>
         </div>
    </div>
       </div> 
       
       <div id="resModalTemplate">
        </div>
        <script> $("#resModalTemplate").load("modal1.php #resModal");    
        </script>
        <script>
            $("#sidebar").load("SideBar.php");
        </script>
        
     
</body>
</html>