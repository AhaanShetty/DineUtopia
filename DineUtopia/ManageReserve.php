<?php
include('login.php');
      // username and password sent from form 
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
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar"></nav>
        <div id="content" class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
                    <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: transparent">
                <i class="fas fa-align-left fa-3x" style></i>
            </button>
        <span style="font-family: 'Cinzel', serif;
font-size: 1.5em;
    color:#bbd4cd;
    text-shadow:1px 2px 10px black; padding-left: inherit">
           <?php 
        if(isset($_SESSION['login_user'])){
        echo 'HELLO ';
        echo $_SESSION['login_user'];
        echo " !";
        }
        ?>
        </span>
        </nav>
        <header style="text-align: center">
                    <h1 style="padding-top:20px">Manage Reservations</h1>
                    
                </header>
        <div class="container-fluid" id="Reserve">
            
            <table class="table table-striped">
    <thead>
      <tr>
        <th>Reservation Id</th>
        <th>Reservation Time</th>
        <th>Reservation Date</th>
        <th>No. of People</th>
        <th>Customer Id</th>
        <th>Table Id</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $sql="Select * from Reserve";
        $result=mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
      echo"<tr>
        <td>".$row['r_id']."</td>
        <td>".$row['r_time']."</td>
        <td>".$row['r_date']."</td>
        <td>".$row['no_people']."</td>
        <td>".$row['c_email_id']."</td>
        <td>".$row['t_id']."</td>
      </tr>";
      }?>
    </tbody>
  </table>
            
        </div>
       
</div>
        </div>
        
<script>
            $("#sidebar").load("SideBar.php");
        </script>
</body>
</html>