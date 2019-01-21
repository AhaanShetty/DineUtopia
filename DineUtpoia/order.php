<?php
include('login.php');
      // username and password sent from form 
      if(!isset($_SESSION['Order_Id']) and !isset($_SESSION['Total'])){
      $_SESSION['Order_Id'] = rand(1,10000);
         $_SESSION['Total']=0;
         $o_id = $_SESSION['Order_Id'];
         $cus_email= $_SESSION['user_email'];
         $sql="INSERT INTO Order1(Order_Id,c_email_id) Values('$o_id','$cus_email')";
         $re = mysqli_query($db,$sql);
      }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DINE UTOPIA</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

       
        
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
        <link rel="stylesheet" href="styleOrder.css">

    </head>
    <body>
<div class="wrapper" style="background:#D7CEC7;">
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
          <div class=" section banner container-fluid" style="background: url('https://images.unsplash.com/photo-1504712598893-24159a89200e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f750a83e2097b31a9c7f3835335f9d12&auto=format&fit=crop&w=1051&q=80') no-repeat center center; background-size: cover;">
          </div>  
          <div class="container-fluid section menu-top">
                <header style="text-align: center">
                    <h1 style="padding-top:20px">Order Now</h1>
                    
        </header>
        </div>
<div class="container-fluid" >   
    <div class="row">
        <div class="col-md-12" style="margin-left:0px">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Starters"  role="tab" data-toggle="tab">Starters</a></li>
                    <li role="presentation"><a href="#Salads" role="tab" data-toggle="tab">Salads</a></li>
                    <li role="presentation"><a href="#Mains" role="tab" data-toggle="tab">Main Course</a></li>
                    <li role="presentation"><a href="#Dessert" role="tab" data-toggle="tab">Dessert</a></li>
                     <li role="presentation"><a href="#Drinks" role="tab" data-toggle="tab">Drinks</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in" id="Starters">
                        <h3>Starters</h3>
                        <br>
                        <select id="foodtype_starter" class="foodtype_starter">
                            <option value="">--Select--</option>
                        <option value="Veg" >Veg</option>
                        <option value="Non-Veg">Non-Veg</option>
                        </select>
                        <br>
                     <div id="starterdiv">
                    </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade main" id="Mains">
                        <h3>Main Course</h3>
                      <br>
                        <select id="foodtype_mains" class="foodtype">
                            <option value="">--Select--</option>
                        <option value="Veg" >Veg</option>
                        <option value="Non-Veg">Non-Veg</option>
                        </select>
                        <br>
                     <div id="Mainsdiv">
                    </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade sal" id="Salads">
                        <h3>Salads</h3>
                        <br>
                        <select id="foodtype_salad" class="foodtype">
                            <option value="">--Select--</option>
                        <option value="Veg" >Veg</option>
                        <option value="Non-Veg">Non-Veg</option>
                        </select>
                        <br>
                     <div id="salad_div">
                    </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade des" id="Dessert">
                        <h3>Dessert</h3>
                        <br>
                        <select id="foodtype_dessert" class="foodtype">
                            <option value="">--Select--</option>
                        <option value="Veg" >Veg</option>
                        <option value="Non-Veg">Non-Veg</option>
                        </select>
                        <br>
                     <div id="dessert_div">
                    </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade drink" id="Drinks">
                        <h3>Drinks</h3>
                       <br>
                        <select id="foodtype_drinks" class="foodtype">
                            <option value="">--Select--</option>
                        <option value="Mocktail" >Mocktail</option>
                        <option value="Cocktail">Cocktail</option>
                        <option value="Soft drinks">Soft drinks</option>
                        </select>
                        <br>
                     <div id="drinks_div">
                    </div>
                    </div>
                </div>
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
$(document).ready(function(){
$("#foodtype_starter").change(function(){
var startertype = $(this).val();

$.ajax({
url : "typeselect.php",
method : "POST",
data : {startertype:startertype},
success:function(data){
$("#starterdiv").html(data);
}
});
});
//Mains
$("#foodtype_mains").change(function(){
var mainstype = $(this).val();

$.ajax({
url : "typeselect.php",
method : "POST",
data : {mainstype:mainstype},
success:function(data){
$("#Mainsdiv").html(data);
}
});
});
//Salads
$("#foodtype_salad").change(function(){
var saladtype = $(this).val();

$.ajax({
url : "typeselect.php",
method : "POST",
data : {saladtype:saladtype},
success:function(data){
$("#salad_div").html(data);
}
});
});

//Dessert
$("#foodtype_dessert").change(function(){
var desserttype = $(this).val();

$.ajax({
url : "typeselect.php",
method : "POST",
data : {desserttype:desserttype},
success:function(data){
$("#dessert_div").html(data);
}
});
});
//Drinks
$("#foodtype_drinks").change(function(){
var drinktype = $(this).val();

$.ajax({
url : "typeselect.php",
method : "POST",
data : {drinktype:drinktype},
success:function(data){
$("#drinks_div").html(data);
}
});
});
});
</script>
<script>
            $("#sidebar").load("SideBar.php");
        </script>
</body>
</html>