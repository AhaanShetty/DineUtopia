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
        <link rel="stylesheet" href="styleMenu.css">
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
                <header style="text-align: center">
                    <h1>MENU</h1>
        </header>
                
                <div class="menu">
            <div class="row">
        <div class="col-md-4">
            <a href="#" data-target="#starterModal" data-toggle="modal">
                <div class="d1">
                    <h3 class="start">Starters</h3>
                </div>
            </a>
        </div>
         <div class="col-md-4">
            <a class="s1" href="#" data-target="#MCModal" data-toggle="modal">
                <div class="d2" >
                    
                    <h3 class="main">Main Course</h3>
                </div>
            </a>
        </div>
         
         <div class="col-md-4">
            <a class="s1" href="#" data-target="#saladModal" data-toggle="modal">
                <div class="d3">

                    <h3 class="sal">Salads</h3>
                </div>
            </a>
        </div>
     </div>
     
     
     <div class="row">
         <div class="col-md-6" >
            <a class="s1" href="#" data-target="#desertModal" data-toggle="modal">
                <div class="d4" >
                    
                    <h3 class="des">Desserts</h3>
                </div>
            </a>
         </div>
         <div class="col-md-6">
            <a class="s1" href="#" data-target="#drinksModal" data-toggle="modal">
                <div class="d5" >
                    
                    <h3 class="drinks">Drinks</h3>
                </div>
            </a>
         </div>
     </div>
            </div>
    </div>
        </div>
    </div>
        <div id="signupModalTemplate">
        </div>
        <div id="loginModalTemplate">
        </div>
        <div id="starterModalTemplate">
        </div>
        <div id="MCModalTemplate">
        </div>
        <div id="saladModalTemplate">
        </div>
        <div id="desertModalTemplate">
        </div>
        <div id="drinksModalTemplate">
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
             $("#starterModalTemplate").load("MenuModals.php #starterModal");
        </script>
        <script>
             $("#MCModalTemplate").load("MenuModals.php #MCModal");
        </script>
        <script>
             $("#saladModalTemplate").load("MenuModals.php #saladModal");
        </script>
        <script>
             $("#desertModalTemplate").load("MenuModals.php #desertModal");
        </script>
        <script>
             $("#drinksModalTemplate").load("MenuModals.php #drinksModal");
        </script>
        <script>
            $("#sidebar").load("SideBar.php");
        </script>
</body>
</html>