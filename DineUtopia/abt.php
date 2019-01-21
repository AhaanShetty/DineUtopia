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
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

       
        
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        
        <script src="scriptToggleSidebarMenu.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styleAbt.css">

    </head>
    <body>
<div class="wrapper">
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
          <div class=" section banner container-fluid" style="background: url('https://images.unsplash.com/photo-1522165078649-823cf4dbaf46?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=756f069c98c96a701453b1e27630e961&auto=format&fit=crop&w=750&q=80') no-repeat center center; background-size: cover;">
          </div>  
          <div class="container-fluid section menu-top">
                <header style="text-align: center">
                    <h1 style="padding-top:20px">About Us</h1>
                    
        </header>
        </div>

        	 <div class="container-fluid section abc-top" >
        	     
        	     <section id="team" class="pb-5">
    <div class="container">
        <br>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="yrg.jpg" alt="card image"></p>
                                    <h4 class="card-title">YASH GUPTE</h4>
                                    
                                    <p class="card-text">CFO and Co-Founder of DINE UTOPIA</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">YASH GUPTE</h4>
                                    
                                    <p class="card-text">Currently studying in KJSCE.Area of interests include blockchain technology,stock trading,etc.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/image/Shiva.jpg" alt="card image"></p>
                                    <h4 class="card-title">SHIVASHISH JAISWAL</h4>
                                    <p class="card-text">CEO and Co-Founder of DINE UTOPIA</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">SHIVASHISH JAISWAL</h4>
                                    <p class="card-text">Currently studing in TY COMP in KJSCE.Area of interest are AI and Maching Learning among others.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/shivashish.jaiswal.7">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/shivashish987">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://github.com/IamShiv26">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/shivashish-jaiswal-84616b15a/">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="as.jpg" alt="card image"></p>
                                    <h4 class="card-title">AHAAN SHETTY</h4>
                                    <p class="card-text">COO and Co-Founder of DINE UTOPIA</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">AHAAN SHETTY</h4>
                                    <p class="card-text">Currently studying in KJSCE.Area of interests include cyber security,data analysis,etc.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <!-- ./Team member -->

        </div>
    </div>
</section>
        				<header style="text-align: center">
                            <h3 style="padding-top:10px"   background-color: tomato>Our mission is to ensure that everyone gets a tasty meal on time.<br><br>We do this by:<br>Helping people discover great places around them.<br>Building amazing experiences around dining.<br>Enabling restaurants to create amazing experiences.<br>With dedicated engagement and management tools, we're enabling restaurants to spend more time focusing on food itself, which translates directly to better dining experiences.</h3></header>
                            
             </div>               
<div class="container-fluid">   
    <div class="row">
        <div class="col-md-12" style="margin-left:0px">
            <div class="tab" role="tabpanel">
                
       
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