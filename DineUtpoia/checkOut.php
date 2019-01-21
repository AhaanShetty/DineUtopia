<?php
session_start();
include("config.php");
$order_id = $_SESSION['Order_Id'];
$sql = "Select * from Item i INNER JOIN Contains c ON i.Item_Id=c.Item_Id where c.order_Id='$order_id'";
$result = mysqli_query($db,$sql);


$rate=$_SESSION['discount'];
$total=$_SESSION['Total'];
$disc=round($total*$rate)/100;
$disc_total=$total-$disc;
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DINE UTOPIA</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
        <style>
            #Spinner{
                position:fixed;
                top:50%;
                left:50%;
            }
            
        </style>
       
        
         <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        
        <script src="scriptToggleSidebarMenu.js" type="text/javascript"></script>
        <script scr="checkOutJS.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styleCheckOut.css">

    </head>
    <body>   
             <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
          <form method="post" action="unsetSession.php">
        <div class="block-heading">
          <h2>Payment</h2>
          <p>You have Added the following Items to Your Cart:</p>
        </div>
         
          <div class="products">
            <h3 class="title">Checkout</h3>
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
            <div class="item">
              <span class="price">&#8377;<?php echo $sub_total; ?></span>
              <p class="item-name"><?php echo $item_name;?></p>
              <p class="item-description">Price : &#8377;<?php echo $item_price; ?></p>
              <p class="item-description">Quantity : <?php echo $item_quantity; ?></p>
            </div>
            <?php } ?>
            <div class="total">Total<span class="price">&#8377;<?php echo $_SESSION['Total']; ?></span></div><br>
            <div class="discount">Discount<span class="disc_amt" style="float:right">&#8377;<?php  echo $disc; ?></span></div>
            <div class="discount_total">After Discount<span class="disc_total" style="float:right">&#8377;<?php  echo $disc_total; ?></span></div><br>
                <button type="button" class="btn btn-primary back_to_order" onclick="window.location.href='http://easydine.000webhostapp.com/order.php'" >↩ Continue Ordering</button>
              </div>
              
          
          
      
          <div class="card-details">
            <h3 class="title">Card Details</h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" maxlength="2" pattern="^(0[0-9]|1[0-2])$" title="Please enter in specified format" required>
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" maxlength="2" pattern="^([0-9][0-9])$" title="Please enter in specified format" required>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" pattern="^((4\d{3})|(5[1-5]\d{2})|(6011))-?\d{4}-?\d{4}-?\d{4}|3[4,7]\d{13}$" title="Please enter Valid Credit Card Number" onkeyup="myFunction()" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVV</label>
                <input id="cvv" type="password" class="form-control" placeholder="CVV" aria-label="Card Holder" aria-describedby="basic-addon1" maxlength="3" pattern="^([0-9][0-9][0-9])$" required>
              </div>
              <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary btn-block" >Place Order ➜</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
  <script>
 
  
      function myFunction() {
    var x = document.getElementById("card-number");
    var val=x.value;
    var l=val.length;
    if((l+1)%5 ==0 && l<16)
    x.value = x.value + "-";
}
  </script>
  <script>
      $(document).ready(function() {

$('form').submit(function() {
alert("Your Order Has been Placed!!!");

});
});
  </script>
</body>
</html>