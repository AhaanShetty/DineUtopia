<?php
include('login.php');
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
        <!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        
        <script src="scriptToggleSidebarMenu.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styleIndex.css">
        <style>
        #myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    z-index:0;
}
</style>

    </head>
    <body>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar"></nav>
        <div id="content" class="container-fluid">
            <video autoplay muted loop id="myVideo">
            <source src="Food Glorious Food ( 720 X 1280 ).mp4" type="video/mp4">
            Your browser does not support HTML5 video.
    </video>
    <nav class="navbar navbar-expand-lg fixed-left">
        <div class="container-fluid">
           <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: transparent">
                <i style="color:#bbd4cd" class="fas fa-align-left fa-3x"></i>
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
            <div class="site-title">
                <a href="index.php"><span class="title">DINE <br>UTOPIA</span></a>
            </div>
</div>
        </div>
<div id="signupModalTemplate">
        </div>
        <div id="loginModalTemplate">
        </div>
        <div id="resModalTemplate">
        </div>
        <script> $("#resModalTemplate").load("modal1.php #resModal");    
</script>
         <script> $("#signupModalTemplate").load("modal1.php #signupModal");
        </script>
        <script> $("#loginModalTemplate").load("modal1.php #loginModal");    
</script>
<script>
            $("#sidebar").load("SideBar.php");
        </script>
</body>
</html>